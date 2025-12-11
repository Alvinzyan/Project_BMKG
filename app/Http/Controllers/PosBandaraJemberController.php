<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\CatatanKategori;
use App\Models\Kategori;
use App\Models\LaporanKategori;
use App\Models\Lokasi;
use App\Models\Pengecekan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\PeriodeHelper;

class PosBandaraJemberController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $periode = PeriodeHelper::getPeriodeAktif();
        return view('inventaris-alat.index', compact('user'))
            ->with('periode', $periode);
    }

    public function create()
    {
        $user = Auth::user();

        $lokasi = Lokasi::where('nama_lokasi', 'Pos Meteorologi Bandara Notohadinegoro Jember')->firstOrFail();
        $periode = PeriodeHelper::getPeriodeAktif();

        $kategoris = Kategori::with(['alats' => function ($query) use ($periode) {
            $query->with(['pengecekans' => function ($q) use ($periode) {
                $q->whereBetween('created_at', [
                    $periode['start_date'] . ' 00:00:00',
                    $periode['end_date'] . ' 23:59:59'
                ])->latest();
            }]);
        }])->where('id_lokasi', $lokasi->id)
            ->where('is_archived', 0)
            ->whereHas('alats')
            ->get();

        $dataSudahAda = PeriodeHelper::filterPengecekanByPeriode(
            Pengecekan::whereHas('alat', function ($q) use ($lokasi) {
                $q->whereHas('kategori', function ($q2) use ($lokasi) {
                    $q2->where('id_lokasi', $lokasi->id);
                });
            }),
            $periode
        )->exists();

        $pengecekanTerakhir = Pengecekan::whereHas('alat', function ($q) use ($lokasi) {
            $q->whereHas('kategori', function ($q2) use ($lokasi) {
                $q2->where('id_lokasi', $lokasi->id);
            });
        })
            ->whereBetween('created_at', [$periode['start_date'] . ' 00:00:00', $periode['end_date'] . ' 23:59:59'])
            ->get()
            ->keyBy('id_alat');

        $catatanTerakhir = CatatanKategori::whereHas('kategori', function ($q) use ($lokasi) {
                $q->where('id_lokasi', $lokasi->id);
            })
            ->whereBetween('created_at', [
                $periode['start_date'] . ' 00:00:00',
                $periode['end_date'] . ' 23:59:59'
            ])
            ->latest()
            ->get()
            ->keyBy('id_kategori');

        return view('pos-bandara-jmbr.create', compact('lokasi', 'kategoris', 'user', 'periode', 'dataSudahAda', 'pengecekanTerakhir', 'catatanTerakhir'));
    }

    public function store(Request $request)
    {
        $namaTeknisi = Auth::user()->nama_lengkap;

        foreach ($request->kondisi as $alatId => $kondisiList) {
            $kondisiArray = is_array($kondisiList) ? $kondisiList : [$kondisiList];

            $fotoLampiranPath = null;
            if ($request->hasFile("foto_lampiran.$alatId")) {
                $file = $request->file("foto_lampiran.$alatId");
                $namaFile = time() . '.' . $file->getClientOriginalExtension();
                $fotoLampiranPath = $file->storeAs('public/foto_pengecekan', $namaFile);
            }

            Pengecekan::create([
                'penanggung_jawab' => $namaTeknisi,
                'id_alat' => $alatId,
                'kondisi' => $kondisiArray,
                'kalibrasi_terakhir' => $request->kalibrasi[$alatId] ?? null,
                'foto_lampiran' => $fotoLampiranPath ? str_replace('public/', '', $fotoLampiranPath) : null,
            ]);
        }

        if ($request->has('catatan')) {
            foreach ($request->catatan as $kategoriId => $isi) {
                if ($isi) {
                    CatatanKategori::create([
                        'id_kategori' => $kategoriId,
                        'isi_catatan' => $isi
                    ]);
                }
            }
        }

        return redirect()->route('pos-bandara-jmbr.create')->with('success', 'Data pengecekan alat berhasil disimpan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit()
    {
        $user = Auth::user();

        $lokasi = Lokasi::where('nama_lokasi', 'Pos Meteorologi Bandara Notohadinegoro Jember')->firstOrFail();

        $periode = PeriodeHelper::getPeriodeAktif();
        $start = $periode['start_date'] . ' 00:00:00';
        $end   = $periode['end_date']   . ' 23:59:59';

        $kategoris = Kategori::with([
            'alats' => function ($query) use ($start, $end) {
                $query->with(['pengecekans' => function ($q) use ($start, $end) {
                    $q->whereBetween('created_at', [$start, $end])
                    ->latest();
                }]);
            },

            'catatanKategoris' => function ($q) use ($start, $end) {
                $q->whereBetween('created_at', [$start, $end])
                ->latest();
            }
        ])
        ->where('id_lokasi', $lokasi->id)
        ->where('is_archived', 0)
        ->whereHas('alats')
        ->get();

        foreach ($kategoris as $kategori) {
            $kategori->catatan_periode_ini = $kategori->catatanKategoris->sortByDesc('created_at')->first();
        }

        return view('pos-bandara-jmbr.edit', compact('lokasi', 'kategoris', 'user', 'periode'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'kondisi' => 'required|array',
            'kalibrasi' => 'nullable|array',
            'penanggung_jawab' => 'nullable|array',
            'foto_lampiran.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $userId = Auth::id();
        
        $periode = PeriodeHelper::getPeriodeAktif();
        $start = $periode['start_date'] . ' 00:00:00';
        $end   = $periode['end_date']   . ' 23:59:59';

        foreach ($request->kondisi as $alatId => $kondisiList) {

            $kondisiArray = is_array($kondisiList) ? $kondisiList : [$kondisiList];

            $fotoLampiranPath = null;
            if ($request->hasFile("foto_lampiran.$alatId")) {
                $file = $request->file("foto_lampiran.$alatId");
                $namaFile = time() . '.' . $file->getClientOriginalExtension();
                $fotoLampiranPath = $file->storeAs('public/foto_pengecekan', $namaFile);
            }

            $pengecekan = Pengecekan::where('id_alat', $alatId)->latest()->first();

            $penanggung = $request->penanggung_jawab[$alatId]
                ?? ($pengecekan->penanggung_jawab ?? Auth::user()->nama_lengkap);

            $pengecekan = Pengecekan::where('id_alat', $alatId)
                ->whereBetween('created_at', [$start, $end])
                ->latest()
                ->first();

            if ($pengecekan) {
                $pengecekan->update([
                    'penanggung_jawab' => $penanggung,
                    'kondisi' => $kondisiArray,
                    'kalibrasi_terakhir' => $request->kalibrasi[$alatId] ?? null,
                    'foto_lampiran' => $fotoLampiranPath ? str_replace('public/', '', $fotoLampiranPath) : $pengecekan->foto_lampiran,
                ]);
            } else {
                Pengecekan::create([
                    'penanggung_jawab' => $penanggung,
                    'id_alat' => $alatId,
                    'kondisi' => $kondisiArray,
                    'kalibrasi_terakhir' => $request->kalibrasi[$alatId] ?? null,
                    'foto_lampiran' => $fotoLampiranPath ? str_replace('public/', '', $fotoLampiranPath) : null,
                ]);
            }
        }

        if ($request->has('catatan')) {
            foreach ($request->catatan as $kategoriId => $isiRaw) {

                $isi = is_string($isiRaw) ? trim($isiRaw) : null;

                $catatan = CatatanKategori::where('id_kategori', $kategoriId)
                    ->whereBetween('created_at', [$start, $end])
                    ->latest()
                    ->first();

                if ($isi && $isi !== '') {
                    if ($catatan) {
                        $catatan->update(['isi_catatan' => $isi]);
                    } else {
                        CatatanKategori::create([
                            'id_kategori' => $kategoriId,
                            'isi_catatan' => $isi,
                        ]);
                    }
                } else {
                    if ($catatan) {
                        $catatan->delete();
                    }
                }
            }
        }
        
        return redirect()->route('pos-bandara-jmbr.edit')
            ->with('success', 'Data pengecekan alat dan catatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

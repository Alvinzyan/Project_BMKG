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

class KetapangBwiController extends Controller
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

        $lokasi = Lokasi::where('nama_lokasi', 'Pos Meteorologi Pelabuhan Ketapang Banyuwangi')->firstOrFail();
        $periode = PeriodeHelper::getPeriodeAktif();

        $kategoris = Kategori::with(['alats' => function ($query) use ($periode) {
            $query->with(['pengecekans' => function ($q) use ($periode) {
                $q->whereBetween('created_at', [
                    $periode['start_date'] . ' 00:00:00',
                    $periode['end_date'] . ' 23:59:59'
                ])->latest();
            }]);
        }])->where('id_lokasi', $lokasi->id)->get();

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
            ->get()
            ->keyBy('id_kategori');

        return view('ketapang-bwi.create', compact('lokasi', 'kategoris', 'user', 'periode', 'dataSudahAda', 'pengecekanTerakhir', 'catatanTerakhir'));
    }

    public function store(Request $request)
    {
        $userId = Auth::id();

        foreach ($request->kondisi as $alatId => $kondisiList) {
            $kondisiArray = is_array($kondisiList) ? $kondisiList : [$kondisiList];

            $fotoLampiranPath = null;
            if ($request->hasFile("foto_lampiran.$alatId")) {
                $file = $request->file("foto_lampiran.$alatId");
                $namaFile = time() . '.' . $file->getClientOriginalExtension();
                $fotoLampiranPath = $file->storeAs('public/foto_pengecekan', $namaFile);
            }

            Pengecekan::create([
                'id_user' => $userId,
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

        return redirect()->route('ketapang-bwi.create')->with('success', 'Data pengecekan alat berhasil disimpan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit()
    {
        $user = Auth::user();

        $lokasi = Lokasi::where('nama_lokasi', 'Pos Meteorologi Pelabuhan Ketapang Banyuwangi')->firstOrFail();

        $kategoris = Kategori::with([
            'alats' => function ($query) {
                $query->with('pengecekanTerakhirAktif');
            },
            'catatanTerakhir'
        ])->where('id_lokasi', $lokasi->id)->get();

        return view('ketapang-bwi.edit', compact('lokasi', 'kategoris', 'user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'kondisi' => 'required|array',
            'kalibrasi' => 'nullable|array',
            'foto_lampiran.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $userId = Auth::id();

        foreach ($request->kondisi as $alatId => $kondisiList) {

            $kondisiArray = is_array($kondisiList) ? $kondisiList : [$kondisiList];

            $fotoLampiranPath = null;
            if ($request->hasFile("foto_lampiran.$alatId")) {
                $file = $request->file("foto_lampiran.$alatId");
                $namaFile = time() . '.' . $file->getClientOriginalExtension();
                $fotoLampiranPath = $file->storeAs('public/foto_pengecekan', $namaFile);
            }

            $pengecekan = Pengecekan::where('id_alat', $alatId)->latest()->first();
            if ($pengecekan) {
                $pengecekan->update([
                    'id_user' => $userId,
                    'kondisi' => $kondisiArray,
                    'kalibrasi_terakhir' => $request->kalibrasi[$alatId] ?? null,
                    'foto_lampiran' => $fotoLampiranPath ? str_replace('public/', '', $fotoLampiranPath) : $pengecekan->foto_lampiran,
                ]);
            } else {
                Pengecekan::create([
                    'id_user' => $userId,
                    'id_alat' => $alatId,
                    'kondisi' => $kondisiArray,
                    'kalibrasi_terakhir' => $request->kalibrasi[$alatId] ?? null,
                    'foto_lampiran' => $fotoLampiranPath ? str_replace('public/', '', $fotoLampiranPath) : null,
                ]);
            }
        }

        // === UPDATE CATATAN ===
        if ($request->has('catatan')) {
            foreach ($request->catatan as $kategoriId => $isi) {
                if ($isi) {
                    $catatan = CatatanKategori::where('id_kategori', $kategoriId)->latest()->first();

                    if ($catatan) {
                        $catatan->update(['isi_catatan' => $isi]);
                    } else {
                        CatatanKategori::create([
                            'id_kategori' => $kategoriId,
                            'isi_catatan' => $isi,
                        ]);
                    }
                }
            }
        }

        return redirect()->route('ketapang-bwi.edit')
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

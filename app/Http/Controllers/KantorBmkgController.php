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

class KantorBmkgController extends Controller
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

        $lokasi = Lokasi::where('nama_lokasi', 'Kantor Meteorologi Banyuwangi')->firstOrFail();

        $kategoris = Kategori::with('alats')
            ->where('id_lokasi', $lokasi->id)
            ->where('is_archived', 0) // hanya kategori yang tidak di archive
            ->get();

        return view('kantor-bmkg.create', compact('lokasi', 'kategoris', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kondisi' => 'required|array',
            'kalibrasi' => 'nullable|array',
            'foto_lampiran.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $userId = Auth::id();

        foreach ($request->kondisi as $alatId => $kondisiList) {
            // pastikan kondisi disimpan sebagai array
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

        return redirect()->route('kantor-bmkg.index')->with('success', 'Data pengecekan alat berhasil disimpan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit()
    {
        $lokasi = Lokasi::where('nama_lokasi', 'Kantor Meteorologi Banyuwangi')->firstOrFail();

        $kategoris = Kategori::with([
            'alats.pengecekanTerakhir',
            'catatanTerakhir'
        ])
        ->where('id_lokasi', $lokasi->id)
        ->where('is_archived', 0) // hanya kategori yang tidak di archive
        ->get();

        return view('kantor-bmkg.edit', compact('lokasi', 'kategoris'));
    }

    public function update(Request $request)
    {
        $userId = Auth::id();
        $request->validate([
            'kondisi' => 'required|array',
            'kalibrasi' => 'nullable|array',
            'foto_lampiran.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

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
                    'foto_lampiran' => $fotoLampiranPath ? str_replace('public/','',$fotoLampiranPath) : $pengecekan->foto_lampiran,
                ]);
            } else {
                Pengecekan::create([
                    'id_user' => $userId,
                    'id_alat' => $alatId,
                    'kondisi' => $kondisiArray,
                    'kalibrasi_terakhir' => $request->kalibrasi[$alatId] ?? null,
                    'foto_lampiran' => $fotoLampiranPath ? str_replace('public/','',$fotoLampiranPath) : null,
                ]);
            }

        }

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
        return redirect()->route('kantor-bmkg.index')
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

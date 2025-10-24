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

class KantorBmkgController extends Controller
{
    public function index()
    {
        // $user = Auth::user();

        return view('inventaris-alat.index');
    }

    public function create()
    {
        // $user = Auth::user();

        $lokasi = Lokasi::where('nama_lokasi', 'Kantor Meteorologi Banyuwangi')->firstOrFail();

        $kategoris = Kategori::with('alats')
            ->where('id_lokasi', $lokasi->id)
            ->get();

        return view('kantor-bmkg.create', compact('lokasi', 'kategoris'));
    }

    public function store(Request $request)
    {
        // $userId = Auth::id();

        foreach ($request->kondisi as $alatId => $kondisi) {
            Pengecekan::create([
                // 'id_user' => $userId,
                'id_alat' => $alatId,
                'kondisi' => $kondisi,
                'kalibrasi_terakhir' => $request->kalibrasi[$alatId],
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

        return redirect()->route('kantor-bmkg.create')->with('success', 'Data pengecekan alat berhasil disimpan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit()
    {
        $lokasi = Lokasi::where('nama_lokasi', 'Kantor Meteorologi Banyuwangi')->firstOrFail();

        $kategoris = Kategori::with([
            'alats.pengecekanTerakhir', 'catatanTerakhir'
        ])->where('id_lokasi', $lokasi->id)->get();

        return view('kantor-bmkg.edit', compact('lokasi', 'kategoris'));
    }

    public function update(Request $request)
    {
        // $userId = Auth::id();

        foreach ($request->kondisi as $alatId => $kondisi) {
            $pengecekan = Pengecekan::where('id_alat', $alatId)->latest()->first();

            if ($pengecekan) {
                $pengecekan->update([
                    // 'id_user' => $userId,
                    'kondisi' => $kondisi,
                    'kalibrasi_terakhir' => $request->kalibrasi[$alatId] ?? $pengecekan->kalibrasi_terakhir,
                ]);
            } else {
                Pengecekan::create([
                    // 'id_user' => $userId,
                    'id_alat' => $alatId,
                    'kondisi' => $kondisi,
                    'kalibrasi_terakhir' => $request->kalibrasi[$alatId],
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

        return redirect()->route('kantor-bmkg.edit')
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

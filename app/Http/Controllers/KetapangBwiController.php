<?php

namespace App\Http\Controllers;

use App\Models\CatatanKategori;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Pengecekan;
use Illuminate\Http\Request;
use App\Helpers\PeriodeHelper;


class KetapangBwiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = Auth::user();
        $periode = PeriodeHelper::getPeriodeAktif();
        return view('inventaris-alat.index')
            ->with('periode', $periode);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $user = Auth::user();

        $lokasi = Lokasi::where('nama_lokasi', 'Pos Meteorologi Pelabuhan Ketapang Banyuwangi')->firstOrFail();

        $kategoris = Kategori::with('alats')
            ->where('id_lokasi', $lokasi->id)
            ->get();

        return view('pos-bandara-bwi.create', compact('lokasi', 'kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

        return redirect()->route('ketapang-bwi.create')->with('success', 'Data pengecekan alat berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lokasi = Lokasi::where('nama_lokasi', 'Pos Meteorologi Pelabuhan Ketapang Banyuwangi')->firstOrFail();

        $kategoris = Kategori::with([
            'alats.pengecekanTerakhir',
            'catatanTerakhir'
        ])->where('id_lokasi', $lokasi->id)->get();

        return view('pos-bandara-bwi.edit', compact('lokasi', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $userId = Auth::id();

        foreach ($request->kondisi as $alatId => $kondisi) {
            Pengecekan::create([
                // 'id_user' => $userId,
                'id_alat' => $alatId,
                'kondisi' => $kondisi,
                'kalibrasi_terakhir' => $request->kalibrasi[$alatId]
            ]);
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

        return redirect()->route('ketapang-bwi.edit', $id)->with('success', 'Data pengecekan alat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CatatanKategori;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Pengecekan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PosBandaraJemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();

        $lokasi = Lokasi::where('nama_lokasi', 'Pos Meteorologi Bandara Notodinegoro Jember')->firstOrFail();

        $kategoris = Kategori::with('alats')
            ->where('id_lokasi', $lokasi->id)
            ->get();

        return view('pos-bandara-jmbr.create', compact('lokasi', 'kategoris', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();

        foreach ($request->kondisi as $alatId => $kondisi) {
            Pengecekan::create([
                'id_user' => $userId,
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

        return redirect()->route('pos-bandara-jmbr.create')->with('success', 'Data pengecekan alat berhasil disimpan.');
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
    public function edit()
    {
        $user = Auth::user();

        $lokasi = Lokasi::where('nama_lokasi', 'Kantor Meteorologi Banyuwangi')->firstOrFail();

        $kategoris = Kategori::with([
            'alats.pengecekanTerakhir', 'catatanTerakhir'
        ])->where('id_lokasi', $lokasi->id)->get();

        return view('pos-bandara-jmbr.edit', compact('lokasi', 'kategoris', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $userId = Auth::id();

        foreach ($request->kondisi as $alatId => $kondisi) {
            Pengecekan::create([
                'id_user' => $userId,
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

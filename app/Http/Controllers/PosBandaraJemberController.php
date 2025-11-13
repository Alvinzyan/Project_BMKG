<?php

namespace App\Http\Controllers;

use App\Models\CatatanKategori;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Pengecekan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

        $lokasi = Lokasi::where('nama_lokasi', 'Pos Meteorologi Bandara Notohadinegoro Jember')->firstOrFail();

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
                $namaFile = time() . '_' . $file->getClientOriginalName();
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
        $lokasi = Lokasi::where('nama_lokasi', 'Pos Meteorologi Bandara Notohadinegoro Jember')->firstOrFail();

        $kategoris = Kategori::with([
            'alats.pengecekanTerakhir', 'catatanTerakhir'
        ])->where('id_lokasi', $lokasi->id)->get();

        return view('pos-bandara-jmbr.edit', compact('lokasi', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
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
                $namaFile = time() . '_' . $file->getClientOriginalName();
                $fotoLampiranPath = $file->storeAs('public/foto_pengecekan', $namaFile);
            }
            
            Pengecekan::create([
                'id_user' => $userId,
                'id_alat' => $alatId,
                'kondisi' => $kondisiArray,
                'kalibrasi_terakhir' => $request->kalibrasi[$alatId] ?? null,
                'foto_lampiran' => $fotoLampiranPath,
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

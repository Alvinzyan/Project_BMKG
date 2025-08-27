<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Pengecekan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KantorBmkgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inventaris-alat.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lokasi = Lokasi::where('nama_lokasi', 'Kantor Meteorologi Banyuwangi')->firstOrFail();

        $kategoris = Kategori::with('alats')
            ->where('id_lokasi', $lokasi->id)
            ->get();

        return view('kantor-bmkg.create', compact('lokasi', 'kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $request->validate([
            'kondisi'   => 'required|array',
            'kalibrasi_terakhir' => 'required|array',
        ]);

        foreach ($request->kondisi as $idAlat => $kondisi) {
            Pengecekan::create([
                'id_user'           => Auth::id(),
                'id_alat'           => $idAlat,
                'id_laporan_kategori'    => 1,
                'kondisi'           => $kondisi,
                'kalibrasi_terakhir'=> $request->kalibrasi_terakhir[$idAlat],
            ]);
        }

        return redirect()->back()->with('success', 'Data pengecekan berhasil disimpan.');
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pengecekan = Pengecekan::findOrFail($id);

        $request->validate([
            'kondisi'   => 'required|in:baik,rusak ringan,rusak berat',
            'kalibrasi' => 'nullable|integer',
        ]);

        $pengecekan->update([
            'kondisi'            => $request->kondisi,
            'kalibrasi_terakhir' => $request->kalibrasi,
        ]);

        return redirect()->back()->with('success', 'Data pengecekan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

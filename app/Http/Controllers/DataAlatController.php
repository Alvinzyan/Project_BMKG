<?php

namespace App\Http\Controllers;
use App\Models\Lokasi;

use Illuminate\Http\Request;

class DataAlatController extends Controller
{
    public function index()
    {
        // mengambil lokasinya
        $lokasis = Lokasi::all();

        return view('data-alat.index', compact('lokasis'));
    }

    public function kategoriByLokasi($nama_lokasi)
    {
        $lokasi = Lokasi::where('nama_lokasi', urldecode($nama_lokasi))
                        ->with('kategoris')
                        ->firstOrFail();

        return view('data-alat.tempat-alat.index', compact('lokasi'));
    }

    public function alatByKategori($nama_lokasi, $nama_kategori = null)
    {
        // decode biar + jadi spasi
        $nama_lokasi = urldecode($nama_lokasi);
        $nama_kategori = $nama_kategori ? urldecode($nama_kategori) : null;

        $lokasi = Lokasi::where('nama_lokasi', $nama_lokasi)->firstOrFail();

        if ($nama_kategori && $nama_kategori !== 'semua') {
            $kategori = $lokasi->kategoris()
                ->where('nama_kategori', $nama_kategori)
                ->firstOrFail();

            $alats = $kategori->alats;
            $nama_kategori = $kategori->nama_kategori;
        } else {
            $alats = $lokasi->kategoris()->with('alats')->get()->pluck('alats')->flatten();
            $nama_kategori = 'Semua Kategori';
        }

        return view('data-alat.tambah-data-alat.index', compact('lokasi', 'alats', 'nama_kategori'));
    }



    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

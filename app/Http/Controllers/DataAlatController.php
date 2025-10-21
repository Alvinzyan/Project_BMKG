<?php

namespace App\Http\Controllers;
use App\Models\Lokasi;
use App\Models\Alat;
use App\Models\Kategori;
use App\Models\User;

use Illuminate\Http\Request;

class DataAlatController extends Controller
{
    public function index()
    {
        $lokasis = Lokasi::with('kategoris.alats')->get();

        
        $chartLabels = [];
        $chartData = [];

        foreach ($lokasis as $lokasi) {
            $chartLabels[] = $lokasi->nama_lokasi;

            
            $totalAlat = 0;
            foreach ($lokasi->kategoris as $kategori) {
                $totalAlat += $kategori->alats->count();
            }
            $chartData[] = $totalAlat;
        }

        return view('data-alat.index', compact('lokasis', 'chartLabels', 'chartData'));
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
        
        $nama_lokasi = urldecode($nama_lokasi);
        $nama_kategori = $nama_kategori ? urldecode($nama_kategori) : null;

        // Cari lokasi
        $lokasi = Lokasi::where('nama_lokasi', $nama_lokasi)
            ->with('kategoris.alats')
            ->firstOrFail();

        if ($nama_kategori && $nama_kategori !== 'semua') {
            $kategori = $lokasi->kategoris()
                ->where('nama_kategori', $nama_kategori)
                ->with('alats')
                ->firstOrFail();

            $alats = [
                $kategori->nama_kategori => $kategori->alats
            ];

            $nama_kategori = $kategori->nama_kategori;
        } else {
            
            $alats = [];

            $alats = [];

            foreach ($lokasi->kategoris as $kategori) {
                $alats[$kategori->nama_kategori] = $kategori->alats;
            }

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
    public function store(Request $request, $nama_lokasi, $nama_kategori)
    {
        
        $request->validate([
            'nama_alat' => 'required|string|max:255',
            'merk_tipe' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'tahun_pemasangan' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        $lokasi = Lokasi::where('nama_lokasi', urldecode($nama_lokasi))->firstOrFail();
        $kategori = Kategori::where('nama_kategori', urldecode($nama_kategori))
            ->where('id_lokasi', $lokasi->id)
            ->firstOrFail();

        Alat::create([
            'id_kategori' => $kategori->id,
            'nama_alat' => $request->nama_alat,
            'merk_tipe' => $request->merk_tipe,
            'jumlah' => $request->jumlah,
            'tahun_pemasangan' => $request->tahun_pemasangan,
        ]);

        return redirect()->back()->with('success', 'Data alat berhasil ditambahkan!');
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
    public function update(Request $request,  $nama_lokasi, $id, $nama_kategori = null)
    {
        
        $nama_lokasi = urldecode($nama_lokasi);
        $nama_kategori = $nama_kategori ? urldecode($nama_kategori) : null;

         $validated = $request->validate([
            'nama_alat' => 'required|string|max:255',
            'merk_tipe' => 'nullable|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'tahun_pemasangan' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        $alat = Alat::findOrFail($id);
        $alat->update($validated);

        return redirect()->back()->with('success', 'Data alat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nama_lokasi, $nama_kategori = null, $id)
    {
        
        $alat = Alat::findOrFail($id);
        $alat->delete();

        return redirect()->back()->with('success', 'Data alat berhasil dihapus.');
    }

}

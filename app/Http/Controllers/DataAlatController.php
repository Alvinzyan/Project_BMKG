<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Alat;
use App\Models\Kategori;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DataAlatController extends Controller
{
    public function index()
    {
        $lokasis = Lokasi::with('kategoris.alats')->get();

        // --- ICON MAPPING ---
        $icons = [
            'Kantor Meteorologi Banyuwangi' => <<<HTML
            <div class="icon-shape icon-shape-white rounded d-flex align-items-center justify-content-center">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l18 0" />
                    <path d="M9 8l1 0" />
                    <path d="M9 12l1 0" />
                    <path d="M9 16l1 0" />
                    <path d="M14 8l1 0" />
                    <path d="M14 12l1 0" />
                    <path d="M14 16l1 0" />
                    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                </svg>
            </div>
        HTML,

            'Pos Meteorologi Bandara Banyuwangi' => <<<HTML
            <div class="icon-shape icon-shape-white rounded d-flex align-items-center justify-content-center">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3.59 7h8.82a1 1 0 0 1 .902 1.433l-1.44 3a1 1 0 0 1 -.901 .567h-5.942a1 1 0 0 1 -.901 -.567l-1.44 -3a1 1 0 0 1 .901 -1.433" />
                    <path d="M6 7l-.78 -2.342a.5 .5 0 0 1 .473 -.658h4.612a.5 .5 0 0 1 .475 .658l-.78 2.342" />
                    <path d="M8 2v2" />
                    <path d="M6 12v9h4v-9" />
                    <path d="M3 21h18" />
                    <path d="M22 5h-6l-1 -1" />
                    <path d="M18 3l2 2l-2 2" />
                    <path d="M10 17h7a2 2 0 0 1 2 2v2" />
                </svg>
            </div>
        HTML,

            'Pos Meteorologi Pelabuhan Ketapang Banyuwangi' => <<<HTML
            <div class="icon-shape icon-shape-white rounded d-flex align-items-center justify-content-center">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 9v12m-8 -8a8 8 0 0 0 16 0m1 0h-2m-14 0h-2" />
                    <path d="M12 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                </svg>
            </div>
        HTML,

            'Pos Meteorologi Bandara Notohadinegoro Jember' => <<<HTML
            <div class="icon-shape icon-shape-white rounded d-flex align-items-center justify-content-center">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3.59 7h8.82a1 1 0 0 1 .902 1.433l-1.44 3a1 1 0 0 1 -.901 .567h-5.942a1 1 0 0 1 -.901 -.567l-1.44 -3a1 1 0 0 1 .901 -1.433" />
                    <path d="M6 7l-.78 -2.342a.5 .5 0 0 1 .473 -.658h4.612a.5 .5 0 0 1 .475 .658l-.78 2.342" />
                    <path d="M8 2v2" />
                    <path d="M6 12v9h4v-9" />
                    <path d="M3 21h18" />
                    <path d="M22 5h-6l-1 -1" />
                    <path d="M18 3l2 2l-2 2" />
                    <path d="M10 17h7a2 2 0 0 1 2 2v2" />
                </svg>
            </div>
        HTML,
        ];

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

        return view('data-alat.index', compact('lokasis', 'chartLabels', 'chartData', 'icons'));
    }

    public function create()
    {
        return view('tambah-data-alat.index');
    }

    public function kategoriByLokasi($nama_lokasi)
    {
        $lokasi = Lokasi::where('nama_lokasi', urldecode($nama_lokasi))
                        ->with(['kategoris' => function($kategoriQuery) {
                            $kategoriQuery->where('is_archived', 0); // menampilkan kategori yang unarchive
                        }])
                        ->firstOrFail();

        return view('data-alat.tempat-alat.index', compact('lokasi'));
    }

    public function alatByKategori($nama_lokasi, $nama_kategori = null)
    {

        $nama_lokasi = urldecode($nama_lokasi);
        $nama_kategori = $nama_kategori ? urldecode($nama_kategori) : null;

        // Mengambil Lokasi serta kategori yang aktif/tidak diarchive
        $lokasi = Lokasi::where('nama_lokasi', $nama_lokasi)
            ->with(['kategoris' => function($kategoriQuery){
                $kategoriQuery->where('is_archived', 0); 
            }, 'kategoris.alats'])
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

    public function kategoriArchiveByLokasi($nama_lokasi)
    {
        $lokasi = Lokasi::where('nama_lokasi', urldecode($nama_lokasi))
            ->with(['kategoris' => function($kategoriQuery) {
                $kategoriQuery->where('is_archived', 1); // menampilkan kategori di archive
            }])
            ->firstOrFail();

        return view('data-alat.tempat-alat.archive', compact('lokasi'));
    }

    public function archiveKategori($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->is_archived = 1;
        $kategori->save();

        $lokasiNama = urlencode($kategori->lokasi->nama_lokasi);

        return redirect("/data-alat/$lokasiNama")
            ->with('success', 'Kategori berhasil di-archive.');
    }

    public function unarchiveKategori($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->is_archived = 0;
        $kategori->save();

        $lokasiNama = urlencode($kategori->lokasi->nama_lokasi);

        return redirect("/data-alat/$lokasiNama/archive")
            ->with('success', 'Kategori berhasil di-unarchive.');
    }

    public function storeKategori(Request $request, $nama_lokasi)
    {
        $lokasi = Lokasi::where('nama_lokasi', $nama_lokasi)->firstOrFail();
        
        $request->validate([
            'nama_kategori' => [
                'required',
                Rule::unique('kategoris')->where(fn($q) => 
                    $q->where('id_lokasi', $lokasi->id)
                ),
            ]
        ], [
            'nama_kategori.unique' => 'Kategori ini sudah ada di lokasi tersebut.'
        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'id_lokasi' => $lokasi->id,   
        ]);

        return redirect()->route('data-alat.tempat-alat.index', $lokasi->nama_lokasi)
                        ->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function deleteKategori($id)
    {
        $kategori = Kategori::findOrFail($id);

        if ($kategori->alats()->count() > 0) {
            return redirect()->back()->with('error', 'Kategori tidak bisa dihapus karena masih memiliki alat.');
        }
        
        $lokasiNama = urlencode($kategori->lokasi->nama_lokasi);
        $kategori->delete();

        return redirect("/data-alat/$lokasiNama")
                ->with('success', 'Kategori berhasil dihapus.');
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
            'kalibrasi_terakhir' => 'nullable|date_format:Y-m'
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
            'kalibrasi_terakhir' => $request->kalibrasi_terakhir
                ? $request->kalibrasi_terakhir . '-01'
                : null,
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
            'kalibrasi_terakhir' => 'nullable|date_format:Y-m'
        ]);

        $alat = Alat::findOrFail($id);
        
        $validated['kalibrasi_terakhir'] =
            ($request->kalibrasi_terakhir && $request->kalibrasi_terakhir !== '-')
                ? $request->kalibrasi_terakhir . '-01'
                : null;

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

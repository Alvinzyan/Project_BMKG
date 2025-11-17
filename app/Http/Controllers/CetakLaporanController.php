<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Helpers\PeriodeHelper;
use Carbon\Carbon;
use App\Models\Lokasi;


class CetakLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cetak-laporan.index');
    }

    public function lihatView(Request $request)
    {
        $start = $request->periode_start;
        $end   = $request->periode_end;

        if ($start && $end) {
            $lokasiList = Lokasi::with([
                'kategoris.alats' => function ($q) use ($start, $end) {
                    $q->whereHas('pengecekans', function ($x) use ($start, $end) {
                        $x->whereBetween('tanggal_pengecekan', [$start, $end]);
                    });
                },
                'kategoris.catatanKategori',

                'kategoris.alats.pengecekans' => function ($q) {
                    $q->whereNotNull('foto_lampiran');
                }

            ])->get();
        } else {
            $lokasiList = Lokasi::with([
                'kategoris.alats',
                'kategoris.catatanKategori',

                'kategoris.alats.pengecekans' => function ($q) {
                    $q->whereNotNull('foto_lampiran');
                }

            ])->get();
        }

        return view('pdf.surat-laporan-alat', [
            'tanggal' => now()->translatedFormat('d F Y'),
            'lokasiList' => $lokasiList,
            'periode_start' => $start,
            'periode_end' => $end,
        ]);
    }

    // public function generatePdf()
    // {
    //     $pdf = Pdf::loadView('pdf.surat-cetak-pdf')
    //         ->setPaper('A4', 'portrait');
    //     return $pdf->stream('laporan-alat.pdf');
    // }

    public function generatePdf(Request $request)
    {
        $nomorSurat = $request->nomor_surat;

        $periode = PeriodeHelper::getPeriodeAktif();

        $tanggalPeriode = Carbon::parse($periode['start_date'])->translatedFormat('j');
        $tanggalPeriode .= ' – ' . Carbon::parse($periode['end_date'])->translatedFormat('j F Y');

        $lokasiList = Lokasi::with(['kategoris.alats', 'kategoris.catatanKategori'])->get();

        $data = [
            'nomor_surat' => $nomorSurat,
            'tanggal' => now()->translatedFormat('d F Y'),
            'tanggal_periode' => $tanggalPeriode,
            'lokasiList' => $lokasiList
        ];

        $pdf = Pdf::loadView('pdf.surat-cetak-pdf', $data)
            ->setPaper('A4', 'portrait');
        return $pdf->stream('laporan-alat.pdf');
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

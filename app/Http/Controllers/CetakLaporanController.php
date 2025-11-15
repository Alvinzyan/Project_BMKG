<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Helpers\PeriodeHelper;
use Carbon\Carbon;

class CetakLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cetak-laporan.index');
    }

    public function lihatView()
    {
        return view('pdf.surat-laporan-alat');
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

        $data = [
            'nomor_surat' => $nomorSurat,
            'tanggal' => now()->translatedFormat('d F Y'),
            'tanggal_periode' => $tanggalPeriode
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

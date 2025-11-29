<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Helpers\PeriodeHelper;
use Carbon\Carbon;
use App\Models\Lokasi;
use Illuminate\Support\Facades\Auth;

class CetakLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('periode_start')) {
            $periode = PeriodeHelper::getPeriodeFromDate($request->periode_start);
            $start = $periode['start_date'];
            $end   = $periode['end_date'];
        } else {
            $periodeAktif = PeriodeHelper::getPeriodeAktif();
            $start = $periodeAktif['start_date'];
            $end   = $periodeAktif['end_date'];
        }

        $lokasiList = Lokasi::with([
            'kategoris' => function ($q) use ($start, $end) {
                $q->where('is_archived', 0)
                ->whereHas('alats.pengecekans', function ($q2) use ($start, $end) {
                    $q2->whereBetween('created_at', [
                        "{$start} 00:00:00",
                        "{$end} 23:59:59"
                    ]);
                });
            },
            'kategoris.alats' => function ($q) use ($start, $end) {
                $q->whereHas('pengecekans', function ($q2) use ($start, $end) {
                    $q2->whereBetween('created_at', [
                        "{$start} 00:00:00",
                        "{$end} 23:59:59"
                    ]);
                });
            },
            'kategoris.alats.pengecekans' => function ($q) use ($start, $end) {
                $q->whereBetween('created_at', [
                    "{$start} 00:00:00",
                    "{$end} 23:59:59"
                ]);
            },
        ])->get();

        // // Buang kategori yang tidak punya pengecekan pada periode ini
        // $lokasiList = $lokasiList->map(function ($lokasi) {
        //     $lokasi->kategoris = $lokasi->kategoris->filter(function ($kategori) {
        //         $total = $kategori->alats->sum(function ($alat) {
        //             return $alat->pengecekans->count();
        //         });
        //         return $total > 0; // hanya tampil jika ada pengecekan
        //     });
        //     return $lokasi;
        // });

        // START
        $lokasiList = $lokasiList->map(function ($lokasi) {

            // Filter kategori level
            $lokasi->kategoris = $lokasi->kategoris->filter(function ($kategori) {

                // Filter alat di dalam kategori
                $kategori->alats = $kategori->alats->filter(function ($alat) {
                    return $alat->pengecekans->count() > 0;
                });

                // Kategori tampil hanya jika punya ≥1 alat yang dicek
                return $kategori->alats->count() > 0;
            });

            return $lokasi;
        });

        // Buang LOKASI yang tidak punya kategori
        $lokasiList = $lokasiList->filter(fn($lokasi) => $lokasi->kategoris->count() > 0);
        // END

        $totalData = $lokasiList->sum(function ($lokasi) {
            return $lokasi->kategoris->sum(function ($kategori) {
                return $kategori->alats->sum(function ($alat) {
                    return $alat->pengecekans->count();
                });
            });
        });

        return view('cetak-laporan.index', [
            'periode_start' => $start,
            'periode_end'   => $end,
            'totalData'     => $totalData,
        ]);
    }

    public function lihatView(Request $request)
    {
        if ($request->filled('periode_start') && $request->filled('periode_end')) {
            $start = $request->periode_start;
            $end   = $request->periode_end;
        } else {
            $periodeAktif = PeriodeHelper::getPeriodeAktif();
            $start = $periodeAktif['start_date'];
            $end   = $periodeAktif['end_date'];
        }

        $lokasiList = Lokasi::with([
            'kategoris' => function ($q) use ($start, $end) {
                $q->where('is_archived', 0)
                ->whereHas('alats.pengecekans', function ($q2) use ($start, $end) {
                    $q2->whereBetween('created_at', [
                        "{$start} 00:00:00",
                        "{$end} 23:59:59"
                    ]);
                });
            },
            'kategoris.alats' => function ($q) use ($start, $end) {
                $q->whereHas('pengecekans', function ($q2) use ($start, $end) {
                    $q2->whereBetween('created_at', [
                        "{$start} 00:00:00",
                        "{$end} 23:59:59"
                    ]);
                });
            },
            'kategoris.alats.pengecekans' => function ($q) use ($start, $end) {
                $q->whereBetween('created_at', [
                    "{$start} 00:00:00",
                    "{$end} 23:59:59"
                ]);
            },
            'kategoris.catatanKategoris' => function ($q) use ($start, $end) {
                $q->whereBetween('created_at', [
                    "{$start} 00:00:00",
                    "{$end} 23:59:59"
                ]);
            },
        ])->get();

        // // hilangkan kategori yang tidak punya pengecekan pada periode ini
        // $lokasiList = $lokasiList->map(function ($lokasi) {
        //     $lokasi->kategoris = $lokasi->kategoris->filter(function ($kategori) {
        //         $total = $kategori->alats->sum(function ($alat) {
        //             return $alat->pengecekans->count();
        //         });
        //         return $total > 0; // hanya tampil jika ada pengecekan
        //     });
        //     return $lokasi;
        // });

        // START
        $lokasiList = $lokasiList->map(function ($lokasi) {

            // Filter kategori
            $lokasi->kategoris = $lokasi->kategoris->filter(function ($kategori) {

                // Filter alat di dalam kategori
                $kategori->alats = $kategori->alats->filter(function ($alat) {
                    return $alat->pengecekans->count() > 0;
                });

                // Kategori tampil hanya jika punya ≥1 alat yang dicek
                return $kategori->alats->count() > 0;
            });

            return $lokasi;
        });

        // Buang LOKASI yang tidak punya kategori
        $lokasiList = $lokasiList->filter(fn($lokasi) => $lokasi->kategoris->count() > 0);
        // END

        // Hitung total data
        $totalData = $lokasiList->sum(function ($lokasi) {
            return $lokasi->kategoris->sum(function ($kategori) {
                return $kategori->alats->sum(function ($alat) {
                    return $alat->pengecekans->count();
                });
            });
        });

        foreach ($lokasiList as $lokasi) {
            foreach ($lokasi->kategoris as $kategori) {

                $kategori->latestCatatan = $kategori->catatanKategoris
                    ->sortByDesc('created_at')
                    ->first();

                foreach ($kategori->alats as $alat) {

                    $alat->latestPengecekan = $alat->pengecekans
                        ->sortByDesc('created_at')
                        ->first();

                    $alat->latestKalibrasi = $alat->pengecekans
                        ->whereNotNull('kalibrasi_terakhir')
                        ->sortByDesc('created_at')
                        ->first();
                }
            }
        }

        return view('pdf.surat-laporan-alat', [
            'lokasiList'      => $lokasiList,
            'tanggal'         => now()->translatedFormat('d F Y'),
            'periode_start'   => $start,
            'periode_end'     => $end,
            'totalData'       => $totalData,
        ]);
    }

    public function generatePdf(Request $request)
    {
        $nomorSurat = $request->nomor_surat;

        if ($request->filled('periode_start') && $request->filled('periode_end')) {
            $start = $request->periode_start;
            $end   = $request->periode_end;
        } else {
            $periodeAktif = PeriodeHelper::getPeriodeAktif();
            $start = $periodeAktif['start_date'];
            $end   = $periodeAktif['end_date'];
        }

        $tanggalPeriode = Carbon::parse($start)->translatedFormat('j') . ' – ' . Carbon::parse($end)->translatedFormat('j F Y');

        $lokasiList = Lokasi::with([
            'kategoris' => function ($q) {
                $q->where('is_archived', 0);   // ⬅ kategori yang tidak diarsip
            },
            'kategoris.alats',
            'kategoris.alats.pengecekans' => function ($q) use ($start, $end) {
                $q->whereBetween('created_at', [
                    "{$start} 00:00:00",
                    "{$end} 23:59:59"
                ]);
            },
            'kategoris.catatanKategoris' => function ($q) use ($start, $end) {
                $q->whereBetween('created_at', [
                    "{$start} 00:00:00",
                    "{$end} 23:59:59"
                ]);
            },
        ])->get();

        foreach ($lokasiList as $lokasi) {
            foreach ($lokasi->kategoris as $kategori) {

                $kategori->latestCatatan = $kategori->catatanKategoris
                    ->sortByDesc('created_at')
                    ->first();

                foreach ($kategori->alats as $alat) {

                    $alat->latestPengecekan = $alat->pengecekans
                        ->sortByDesc('created_at')
                        ->first();

                    $alat->latestKalibrasi = $alat->pengecekans
                        ->whereNotNull('kalibrasi_terakhir')
                        ->sortByDesc('created_at')
                        ->first();
                }
            }
        }

        $data = [
            'nomor_surat'     => $nomorSurat,
            'tanggal'         => now()->translatedFormat('d F Y'),
            'tanggal_periode' => $tanggalPeriode,
            'lokasiList'      => $lokasiList,
            'periode_start'   => $start,
            'periode_end'     => $end,
            'nama_lengkap'    => $request->nama_lengkap ?? Auth::user()->nama_lengkap,
        ];

        $pdf = Pdf::loadView('pdf.surat-cetak-pdf', $data)
            ->setPaper('A4', 'portrait');

        return $pdf->stream('laporan-alat.pdf');
    }    
}

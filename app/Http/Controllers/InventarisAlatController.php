<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Helpers\PeriodeHelper;
use App\Models\Kategori;
use App\Models\Pengecekan;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class InventarisAlatController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $periode = PeriodeHelper::getPeriodeAktif();

        $lokasis = Lokasi::with([
            'kategoris' => function ($q) {
                $q->where('is_archived', 0);
            },
            'kategoris.alats',
            'kategoris.alats.pengecekans' => function ($q) use ($periode) {
                $q->whereBetween('created_at', [
                    $periode['start_date'] . ' 00:00:00',
                    $periode['end_date'] . ' 23:59:59',
                ]);
            }
        ])->get();

        foreach ($lokasis as $lokasi) {
            $totalAlat = 0;
            $totalDicek = 0;

            foreach ($lokasi->kategoris as $kategori) {
                foreach ($kategori->alats as $alat) {
                    $totalAlat++;

                    if ($alat->pengecekans->count() > 0) {
                        $totalDicek++;
                    }
                }
            }

            $lokasi->total_alat = $totalAlat;
            $lokasi->total_dicek = $totalDicek;

            if ($totalAlat == 0) {
                // Tidak ada alat di lokasi ini
                $lokasi->status = 'belum';
            } elseif ($totalDicek == 0) {
                // Ada alat tapi belum ada yang dicek
                $lokasi->status = 'belum';
            } elseif ($totalDicek < $totalAlat) {
                // Sudah ada yang dicek tapi belum semua
                $lokasi->status = 'proses';
            } else {
                // Semua alat sudah dicek
                $lokasi->status = 'done';
            }
        }

        $kategoris = Kategori::with('alats')->where('is_archived', 0)->get();

        $pengecekanTerakhir = Pengecekan::whereBetween('created_at', [
            $periode['start_date'] . ' 00:00:00',
            $periode['end_date'] . ' 23:59:59',
        ])
            ->with('user')
            ->latest()
            ->get()
            ->keyBy('id_alat');

        return view('inventaris-alat.index', compact(
            'user',
            'periode',
            'kategoris',
            'pengecekanTerakhir',
            'lokasis'
        ));
    }
}

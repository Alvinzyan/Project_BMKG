<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Helpers\PeriodeHelper;
use App\Models\Kategori;
use App\Models\Pengecekan;
use Illuminate\Http\Request;

class InventarisAlatController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $periode = PeriodeHelper::getPeriodeAktif();

        $kategoris = Kategori::with('alats')->get();

        $pengecekanTerakhir = Pengecekan::whereBetween('created_at', [
            $periode['start_date'] . ' 00:00:00',
            $periode['end_date'] . ' 23:59:59',
        ])
            ->with('user') // supaya bisa ambil nama user
            ->latest()
            ->get()
            ->keyBy('id_alat');

        return view('inventaris-alat.index', compact(
            'user',
            'periode',
            'kategoris',
            'pengecekanTerakhir'
        ));
    }
}

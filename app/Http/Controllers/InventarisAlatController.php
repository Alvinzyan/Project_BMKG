<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Helpers\PeriodeHelper;

use Illuminate\Http\Request;

class InventarisAlatController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $periode = PeriodeHelper::getPeriodeAktif();

        return view('inventaris-alat.index', compact('user'))
            ->with('periode', $periode);
    }
}

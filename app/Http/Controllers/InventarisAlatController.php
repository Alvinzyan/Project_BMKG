<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventarisAlatController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view ('inventaris-alat.index', compact('user'));
    }
}

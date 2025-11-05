<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarisAlatController extends Controller
{
    public function index()
    {
        return view ('inventaris-alat.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataAlatController extends Controller
{
    public function index()
    {
        return view('data-alat.index');
    }
}

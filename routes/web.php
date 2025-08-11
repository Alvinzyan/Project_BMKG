<?php

use App\Http\Controllers\KantorBmkgController;
use App\Http\Controllers\LaporanAlatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/inventaris-alat/cek-alat', function () {
    return view('inventaris-alat.index');
});

Route::get('inventaris-alat/cek-alat/kantor-bmkg', [KantorBmkgController::class, 'create'])->name('kantor-bmkg.create');


Route::get('inventaris-alat/laporan-alat', [LaporanAlatController::class, 'index']);

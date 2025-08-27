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

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/inventaris-alat/cek-alat', [KantorBmkgController::class, 'index'])->name('kantor-bmkg.index');
Route::get('inventaris-alat/cek-alat/kantor-bmkg/create', [KantorBmkgController::class, 'create'])->name('kantor-bmkg.create');
Route::post('inventaris-alat/cek-alat/kantor-bmkg/store', [KantorBmkgController::class, 'store'])->name('kantor-bmkg.store');

Route::get('inventaris-alat/laporan-alat', [LaporanAlatController::class, 'index']);

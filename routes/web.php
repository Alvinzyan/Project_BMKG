<?php

use App\Http\Controllers\KantorBmkgController;
use App\Http\Controllers\PosBandaraBwiController;
use App\Http\Controllers\PosBandaraJemberController;
use App\Http\Controllers\KetapangController;
use App\Http\Controllers\DataAlatController;
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


Route::get('cek-alat/kantor-bmkg', [KantorBmkgController::class, 'create'])->name('kantor-bmkg.create');
Route::get('cek-alat/pos-bandara-bwi', [PosBandaraBwiController::class, 'create'])->name('pos-bandara-bwi.create');
Route::get('cek-alat/pos-bandara-jember', [PosBandaraJemberController::class, 'create'])->name('pos-bandara-jember.create');
Route::get('cek-alat/ketapang', [KetapangController::class, 'create'])->name('ketapang.create');

Route::get('/data-alat', [DataAlatController::class, 'index'])->name('data-alat.index');
Route::get('/tambah-data-alat', [DataAlatController::class, 'create'])->name('tambah-data-alat.create');

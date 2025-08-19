<?php

use App\Http\Controllers\KantorBmkgController;
use App\Http\Controllers\PosBandaraBwiController;
use App\Http\Controllers\PosBandaraJemberController;
use App\Http\Controllers\KetapangController;
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

Route::get('/cek-alat', function () {
    return view('inventaris-alat.index');
});


Route::get('cek-alat/kantor-bmkg', [KantorBmkgController::class, 'create'])->name('kantor-bmkg.create');
Route::get('cek-alat/pos-bandara-bwi', [PosBandaraBwiController::class, 'create'])->name('pos-bandara-bwi.create');
Route::get('cek-alat/pos-bandara-jember', [PosBandaraJemberController::class, 'create'])->name('pos-bandara-jember.create');
Route::get('cek-alat/ketapang', [KetapangController::class, 'create'])->name('ketapang.create');

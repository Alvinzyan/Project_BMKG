<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KantorBmkgController;
use App\Http\Controllers\PosBandaraBwiController;
use App\Http\Controllers\PosBandaraJemberController;
use App\Http\Controllers\KetapangBwiController;
use App\Http\Controllers\LaporanAlatController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\DataAlatController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});

route::get('register', [AuthController::class, 'register'])->name('auth.register');
route::post('register-action', [AuthController::class, 'register_action'])->name('auth.register-action');

route::get('login', [AuthController::class, 'login'])->name('auth.login');
route::post('login-action', [AuthController::class, 'login_action'])->name('auth.login-action');

route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('inventaris-alat/cek-alat', [KantorBmkgController::class, 'index'])->name('kantor-bmkg.index');

Route::get('inventaris-alat/cek-alat/kantor-bmkg/create', [KantorBmkgController::class, 'create'])->name('kantor-bmkg.create');
Route::post('inventaris-alat/cek-alat/kantor-bmkg/store', [KantorBmkgController::class, 'store'])->name('kantor-bmkg.store');
Route::post('inventaris-alat/cek-alat/kantor-bmkg/storeCatatan', [KantorBmkgController::class, 'storeCatatan'])->name('catatan.store');
Route::get('inventaris-alat/cek-alat/kantor-bmkg/edit', [KantorBmkgController::class, 'edit'])->name('kantor-bmkg.edit');
Route::put('inventaris-alat/cek-alat/kantor-bmkg/update', [KantorBmkgController::class, 'update'])->name('kantor-bmkg.update');

Route::get('inventaris-alat/cek-alat/ketapang-bwi/create', [KetapangBwiController::class, 'create'])->name('ketapang-bwi.create');
Route::get('inventaris-alat/cek-alat/pos-bandara-bwi/create', [PosBandaraBwiController::class, 'create'])->name('pos-bandara-bwi.create');
Route::get('inventaris-alat/cek-alat/pos-bandara-jember/create', [PosBandaraJemberController::class, 'create'])->name('pos-bandara-jember.create');

Route::get('inventaris-alat/laporan-alat', [LaporanAlatController::class, 'index']);


Route::prefix('data-alat')->name('data-alat.')->group(function () {
    Route::get('/', [DataAlatController::class, 'index'])
        ->name('index');

    Route::get('/{nama_lokasi}', [DataAlatController::class, 'kategoriByLokasi'])
        ->name('tempat-alat.index');

    Route::get('/{nama_lokasi}/{nama_kategori?}', [DataAlatController::class, 'alatByKategori'])
        ->name('tambah-data-alat.index');

    Route::put('/{nama_lokasi}/update/{id}/{nama_kategori?}', [DataAlatController::class, 'update'])
        ->name('tambah-data-alat.update');
    
    Route::post('/{nama_lokasi}/{nama_kategori?}', [DataAlatController::class, 'store'])
        ->name('tambah-data-alat.store');

    Route::delete('/{nama_lokasi}/{nama_kategori?}/delete/{id}', [DataAlatController::class, 'destroy'])
        ->name('tambah-data-alat.destroy');
});
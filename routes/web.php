<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CetakLaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KantorBmkgController;
use App\Http\Controllers\PosBandaraBwiController;
use App\Http\Controllers\PosBandaraJemberController;
use App\Http\Controllers\KetapangController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\KelolaAkunController;
use App\Http\Controllers\KetapangBwiController;
use App\Http\Controllers\LaporanAlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataAlatController;

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

// Route::get('register', [AuthController::class, 'register'])->name('auth.register');
// Route::post('register-action', [AuthController::class, 'register_action'])->name('auth.register-action');

Route::get('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('login', [AuthController::class, 'login_action']);

Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

// Route::get('dashboard', [DashboardController::class, 'index']);

Route::group(['middleware' => ['auth', 'cekperan:admin,teknisi', 'lastseen']], function () {
    Route::resource('profile', ProfileController::class);
});


Route::group(['middleware' => ['auth', 'cekperan:admin', 'lastseen']], function (){
    Route::resource('kelola-akun', KelolaAkunController::class);
    Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard-admin.index');
});

Route::group(['middleware' => ['auth', 'cekperan:teknisi', 'lastseen']], function (){

    Route::get('inventaris-alat', [KantorBmkgController::class, 'index'])->name('kantor-bmkg.index');

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

    Route::get('cek-alat/kantor-bmkg', [KantorBmkgController::class, 'create'])->name('kantor-bmkg.create');
    Route::get('cek-alat/pos-bandara-bwi', [PosBandaraBwiController::class, 'create'])->name('pos-bandara-bwi.create');
    Route::get('cek-alat/pos-bandara-jember', [PosBandaraJemberController::class, 'create'])->name('pos-bandara-jember.create');
    Route::get('cek-alat/ketapang', [KetapangBwiController::class, 'create'])->name('ketapang.create');

    Route::get('cetak-laporan', [CetakLaporanController::class, 'index'])->name('laporan-alat.index');    
});


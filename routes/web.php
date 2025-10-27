<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CetakLaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KantorBmkgController;
use App\Http\Controllers\PosBandaraBwiController;
use App\Http\Controllers\PosBandaraJemberController;
use App\Http\Controllers\KetapangController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\KelolaAkunController;
use App\Http\Controllers\KetapangBwiController;
use App\Http\Controllers\LaporanAlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataAlatController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

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

Route::get('/inventaris-alat', function () {
    return view('inventaris-alat.index');
});

// Route::get('inventaris-alat', [KantorBmkgController::class, 'index'])->name('kantor-bmkg.index');

Route::get('inventaris-alat/kantor-bmkg/create', [KantorBmkgController::class, 'create'])->name('kantor-bmkg.create');
Route::post('inventaris-alat/kantor-bmkg/store', [KantorBmkgController::class, 'store'])->name('kantor-bmkg.store');
Route::get('inventaris-alat/kantor-bmkg/edit', [KantorBmkgController::class, 'edit'])->name('kantor-bmkg.edit');
Route::put('inventaris-alat/kantor-bmkg/update', [KantorBmkgController::class, 'update'])->name('kantor-bmkg.update');

Route::get('inventaris-alat/ketapang-bwi/create', [KetapangBwiController::class, 'create'])->name('ketapang-bwi.create');
Route::post('inventaris-alat/ketapang-bwi/store', [KetapangBwiController::class, 'store'])->name('ketapang-bwi.store');
Route::get('inventaris-alat/ketapang-bwi/edit', [KetapangBwiController::class, 'edit'])->name('ketapang-bwi.edit');
Route::put('inventaris-alat/ketapang-bwi/update', [KetapangBwiController::class, 'update'])->name('ketapang-bwi.update');

Route::get('inventaris-alat/pos-bandara-bwi/create', [PosBandaraBwiController::class, 'create'])->name('pos-bandara-bwi.create');
Route::post('inventaris-alat/pos-bandara-bwi/store', [PosBandaraBwiController::class, 'store'])->name('pos-bandara-bwi.store');
Route::get('inventaris-alat/pos-bandara-bwi/edit', [PosBandaraBwiController::class, 'edit'])->name('pos-bandara-bwi.edit');
Route::put('inventaris-alat/pos-bandara-bwi/update', [PosBandaraBwiController::class, 'update'])->name('pos-bandara-bwi.update');

Route::get('inventaris-alat/pos-bandara-jember/create', [PosBandaraJemberController::class, 'create'])->name('pos-bandara-jember.create');
Route::post('inventaris-alat/pos-bandara-jember/store', [PosBandaraJemberController::class, 'store'])->name('pos-bandara-jember.store');
Route::get('inventaris-alat/pos-bandara-jember/edit', [PosBandaraJemberController::class, 'edit'])->name('pos-bandara-jember.edit');
Route::put('inventaris-alat/pos-bandara-jember/update', [PosBandaraJemberController::class, 'update'])->name('pos-bandara-jember.update');

Route::get('cetak-laporan', [CetakLaporanController::class, 'index'])->name('laporan-alat.index');
Route::get('cetak-laporan/view', [CetakLaporanController::class, 'lihatView'])->name('laporan-alat.view');

Route::resource('kelola-akun', KelolaAkunController::class);
Route::resource('profil', ProfileController::class);

Route::get('/surat-laporan', function () {
    return view('pdf.surat-laporan-alat');
});
Route::get('/cetak-laporan', [CetakLaporanController::class, 'generatePdf']);

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



Route::group(['middleware' => ['auth', 'cekperan:admin']], function (){

    Route::resource('kelola-akun', KelolaAkunController::class);
    Route::resource('profile', ProfileController::class);
});
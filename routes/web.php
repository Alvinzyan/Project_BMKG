<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CetakLaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KantorBmkgController;
use App\Http\Controllers\PosBandaraBwiController;
use App\Http\Controllers\PosBandaraJemberController;
use App\Http\Controllers\KetapangController;
use App\Http\Controllers\KelolaAkunController;
use App\Http\Controllers\KetapangBwiController;
use App\Http\Controllers\LaporanAlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataAlatController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Http\Controllers\InventarisAlatController;

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

// === AUTH ===
Route::get('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('login', [AuthController::class, 'login_action']);
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');

// === PROFIL ===
Route::group(['middleware' => ['auth', 'cekperan:admin,teknisi', 'lastseen']], function () {
    Route::resource('profile', ProfileController::class);
});

// === ADMIN ===
Route::group(['middleware' => ['auth', 'cekperan:admin', 'lastseen']], function () {
    Route::get('/kelola-akun/{id}/ubah-password', [KelolaAkunController::class, 'showChangePassword'])
        ->name('kelola-akun.showChangePassword');

    Route::put('/kelola-akun/{id}/update-password', [KelolaAkunController::class, 'updatePassword'])
        ->name('kelola-akun.updatePassword');

    Route::resource('kelola-akun', KelolaAkunController::class);
    Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard-admin.index');
});

// === TEKNISI ===
Route::group(['middleware' => ['auth', 'cekperan:teknisi', 'lastseen']], function () {

    // 🔹 INI SUDAH ADA CONTROLLER, HAPUS ROUTE VIEW DOUBELNYA
    Route::get('inventaris-alat', [KantorBmkgController::class, 'index'])->name('kantor-bmkg.index');

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

    Route::get('inventaris-alat/pos-bandara-jmbr/create', [PosBandaraJemberController::class, 'create'])->name('pos-bandara-jmbr.create');
    Route::post('inventaris-alat/pos-bandara-jmbr/store', [PosBandaraJemberController::class, 'store'])->name('pos-bandara-jmbr.store');
    Route::get('inventaris-alat/pos-bandara-jmbr/edit', [PosBandaraJemberController::class, 'edit'])->name('pos-bandara-jmbr.edit');
    Route::put('inventaris-alat/pos-bandara-jmbr/update', [PosBandaraJemberController::class, 'update'])->name('pos-bandara-jmbr.update');

    Route::get('cetak-laporan', [CetakLaporanController::class, 'index'])->name('laporan-alat.index');
    Route::get('cetak-laporan/view', [CetakLaporanController::class, 'lihatView'])->name('laporan-alat.view');

    Route::prefix('laporan-alat')->name('laporan-alat.')->group(function () {
        Route::get('/', [CetakLaporanController::class, 'index'])->name('index');
        Route::get('/view', [CetakLaporanController::class, 'lihatView'])->name('view');
        Route::get('/pdf', [CetakLaporanController::class, 'generatePdf'])->name('pdf');
    });

    // 🔹 DATA ALAT
    Route::prefix('data-alat')->name('data-alat.')->group(function () {
        
        Route::get('/', [DataAlatController::class, 'index'])->name('index');

        // PAGE ARCHIVE KATEGORI
        Route::get('{nama_lokasi}/archive', [DataAlatController::class, 'kategoriArchiveByLokasi'])
            ->name('kategori.archive');

        // PAGE KATEGORI PER LOKASI 
        Route::get('/{nama_lokasi}', [DataAlatController::class, 'kategoriByLokasi'])->name('tempat-alat.index');

        // TAMBAH KATEGORI
        Route::post('/{nama_lokasi}/kategori/store', [DataAlatController::class, 'storeKategori'])
            ->name('tempat-alat.kategori.store');

        // DELETE KATEGORI
        Route::delete('/kategori/{id}/delete', [DataAlatController::class, 'deleteKategori'])
            ->name('tempat-alat.delete');
        
        // ARCHIVE kategori
        Route::post('/kategori/{id}/archive', [DataAlatController::class, 'archiveKategori'])
            ->name('kategori.archive.action');

        // UNARCHIVE kategori
        Route::post('/kategori/{id}/unarchive', [DataAlatController::class, 'unarchiveKategori'])
            ->name('kategori.unarchive');

        // ALAT DALAM KATEGORI
        Route::get('/{nama_lokasi}/{nama_kategori?}', [DataAlatController::class, 'alatByKategori'])->name('tambah-data-alat.index');
        Route::put('/{nama_lokasi}/update/{id}/{nama_kategori?}', [DataAlatController::class, 'update'])->name('tambah-data-alat.update');
        Route::post('/{nama_lokasi}/{nama_kategori?}', [DataAlatController::class, 'store'])->name('tambah-data-alat.store');
        Route::delete('/{nama_lokasi}/{nama_kategori?}/delete/{id}', [DataAlatController::class, 'destroy'])->name('tambah-data-alat.destroy');
    });

    // 🔹 Cek Alat
    Route::get('cek-alat/kantor-bmkg', [KantorBmkgController::class, 'create'])->name('kantor-bmkg.create');
    Route::get('cek-alat/pos-bandara-bwi', [PosBandaraBwiController::class, 'create'])->name('pos-bandara-bwi.create');
    Route::get('cek-alat/pos-bandara-jember', [PosBandaraJemberController::class, 'create'])->name('pos-bandara-jember.create');
    Route::get('cek-alat/ketapang', [KetapangBwiController::class, 'create'])->name('ketapang.create');
});

// 🔹 ADMIN LANJUTAN (hapus double 'kelola-akun')
Route::group(['middleware' => ['auth', 'cekperan:admin']], function () {
    Route::resource('profile', ProfileController::class);
});

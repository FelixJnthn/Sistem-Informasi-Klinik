<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('welcome');
});

// Routing untuk Login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);

// Routing untuk Master CRUD
Route::get('master', [MasterController::class, 'index']);
Route::resource('users', UserController::class);
Route::resource('pegawais', PegawaiController::class);
Route::resource('wilayahs', WilayahController::class);
Route::resource('tindakans', TindakanController::class);
Route::resource('obats', ObatController::class);

// Routing untuk Menu Transaksi
Route::get('/transaksi/pendaftaran', [TransaksiController::class, 'pendaftaran']);
Route::post('/transaksi/pendaftaran', [TransaksiController::class, 'storePendaftaran']);

Route::get('/transaksi', [TransaksiController::class, 'tindakanObat']);
Route::post('/transaksi/tindakan-obat', [TransaksiController::class, 'storeTindakanObat']);

// Routing untuk Menu Informasi (Pembayaran)
Route::get('/informasi', [InformasiController::class, 'pembayaran']);
Route::post('/informasi/pembayaran', [InformasiController::class, 'storePembayaran']);

// Routing untuk Menu Laporan
Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/laporan/grafik', [LaporanController::class, 'grafik']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

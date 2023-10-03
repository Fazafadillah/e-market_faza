<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;

Route::resource('pelanggan', PelangganController::class);
Route::resource('barang', BarangController::class);
Route::resource('pemasok', PemasokController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('pembelian', PembelianController::class);
Route::resource('penjualan', PenjualanController::class);
Route::resource('produk', ProdukController::class);
Route::get('login', [UserController::class, 'index'])->name('login');

// npm install -g npm@latest
// Remove-Item -Path "node_modules" -Recurse -Force
// Remove-Item -Path "package-lock.json" -Force
// Remove-Item -Path "yarn.lock" -Force
// Get-ChildItem C:\xampp\htdocs\poszie_faza

//login
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login/cek', [UserController::class, 'cekLogin'])->name('cekLogin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//ROUTE UNTUK YG SUDAH LOGIN
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/profile', [HomeController::class, 'profile']);
    Route::get('/contact', [HomeController::class, 'contact']);
    Route::get('/faq', [HomeController::class, 'faq']);


    //route untuk admin
    // Route::group(['middleware' => ['cekUserLogin:1']], function () {
    //     Route::resource('produk', ProdukController::class);
    //     Route::resource('pembelian', PembelianController::class);
    // });

    // //route untuk kasir
    // Route::group(['middleware' => ['cekUserLogin:2']], function () {
    //     Route::resource('pembelian', PembelianController::class);
    // });
});

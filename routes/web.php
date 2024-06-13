<?php

use App\Http\Controllers\AbsensiCT;
use App\Http\Controllers\AdminCT;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/public/cetak-cert/{nomor}', [AbsensiCT::class, 'cert']);
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/auth', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/data-pkkmb/2018', [UserController::class, 'data2018']);
Route::get('/data-pkkmb/2018/{id}/cetak', [UserController::class, 'cetakSertifikat2018']);

// Admin Route
Route::middleware(['auth', 'admin', 'revalidate'])->prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminCT::class, 'index']);
    Route::get('/pesertas',[AdminCT::class, 'peserta']);
    Route::get('/pesertas/2018',[AdminCT::class, 'peserta2018']);
    Route::get('/pesertas/tambah-data', [AdminCT::class, 'tambahData']);
    Route::post('/pesertas/tambah-data/store', [AdminCT::class, 'tambahDataStore']);
});
// End Admin route

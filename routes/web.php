<?php

use App\Http\Controllers\AbsensiCT;
use App\Http\Controllers\AdminCT;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/public/cetak-cert/{nomor}', [AbsensiCT::class, 'cert']);
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/auth', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

// Admin Route
Route::middleware(['auth', 'admin', 'revalidate'])->prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminCT::class, 'index']);
    Route::get('/pesertas',[AdminCT::class, 'peserta']);
    Route::get('/pesertas/tambah-data', [AdminCT::class, 'tambahData']);
    Route::post('/pesertas/tambah-data/store', [AdminCT::class, 'tambahDataStore']);
});
// End Admin route

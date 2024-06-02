<?php

use App\Http\Controllers\AbsensiCT;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/public/cetak-cert/{nomor}', [AbsensiCT::class, 'cert']);

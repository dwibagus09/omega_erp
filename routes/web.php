<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\ClientSampelController;


Route::get('/', function () {
    return view('index');
});

// Route::get('/{page}', [DashboardController::class, 'index'])->where('page', '[A-Za-z0-9\-]+');
Route::get('/tim', [TimController::class, 'index']);

Route::get('/form-layout', function () {
    return view('pendaftaran_klien.index');
});

Route::post('/sampel/store', [ClientSampelController::class, 'store']);

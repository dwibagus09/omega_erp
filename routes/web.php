<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimController;
use App\Http\Controllers\ClientSampelController;


Route::get('/', function () {
    return redirect('/tim');
});


// Route::get('/{page}', [DashboardController::class, 'index'])->where('page', '[A-Za-z0-9\-]+');
Route::get('/tim', [TimController::class, 'index']);

Route::get('/form-layout', function () {
    return view('pendaftaran_klien.index');
});

Route::post('/sampel/store', [ClientSampelController::class, 'store'])->name('sampel.store');

Route::get('/tim', [TimController::class, 'index'])->name('tim.index');
Route::get('/tim/{id}', [TimController::class, 'detail'])->name('tim.detail');
Route::get('/tim/edit/{id}', [TimController::class, 'edit'])->name('tim.edit');
Route::post('/tim/update/{id}', [TimController::class, 'update'])->name('tim.update');


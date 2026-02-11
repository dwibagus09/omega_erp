<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimController;
use App\Http\Controllers\ClientSampelController;
use App\Http\Controllers\MarketingOrderController;
use App\Http\Controllers\PesananSampel;
use App\Http\Controllers\Marketing\PesananSampelController;

Route::get('/', function () {
    return redirect('/tim');
});

// Route::get('/{page}', [DashboardController::class, 'index'])->where('page', '[A-Za-z0-9\-]+');


Route::get('/form-layout', function () {
    return view('pendaftaran_klien.index');
});

Route::post('/sampel/store', [ClientSampelController::class, 'store'])->name('sampel.store');
Route::get('/tim', [TimController::class, 'index'])->name('tim.index');
Route::get('/tim/{id}', [TimController::class, 'detail'])->name('tim.detail');
Route::get('/tim/edit/{id}', [TimController::class, 'edit'])->name('tim.edit');
Route::post('/tim/update/{id}', [TimController::class, 'update'])->name('tim.update');
Route::get('/marketing/orders', [MarketingOrderController::class, 'index']);
Route::get('/marketing-order', [PesananSampel::class, 'index']);
Route::prefix('marketing')->group(function() {
Route::get('pesanan-sampel', [PesananSampelController::class, 'index'])->name('marketing.pesanan_sampel.index');
Route::prefix('marketing')->group(function() {
Route::get('/marketing/tim', [TimController::class, 'index']);


});

});
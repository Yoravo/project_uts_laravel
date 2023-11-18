<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return redirect('barang');
});

Route::get('/barang', [BarangController::class, 'create']);
Route::post('/barang', [BarangController::class, 'process']);
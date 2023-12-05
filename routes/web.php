<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

// Route::get('/', function () {
//     return redirect('utama');
// });

Route::get('/barang', [BarangController::class, 'create']);
Route::post('/barang', [BarangController::class, 'process']);

Route::get('/utama', [BarangController::class, 'praktikum']);
Route::get('/edit-barang/{id}', [BarangController::class, 'edit'])->name('edit');
Route::post('/update-barang/{id}', [BarangController::class, 'update'])->name('update');
Route::get('/hasil/{id}', [BarangController::class, 'hasil'])->name('hasil');
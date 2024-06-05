<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', [ListProdukController::class, 'index'])->name('produks.index');
Route::get('/produk/create', [ListProdukController::class, 'create'])->name('produks.create');
Route::post('/produk', [ListProdukController::class, 'store'])->name('produks.store');
Route::get('/produk/{id}/edit', [ListProdukController::class, 'edit'])->name('produks.edit');
Route::put('/produk/{id}', [ListProdukController::class, 'update'])->name('produks.update');
Route::delete('/produk/{id}', [ListProdukController::class, 'destroy'])->name('produks.destroy');
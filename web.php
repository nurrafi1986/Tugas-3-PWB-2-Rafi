<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index']);

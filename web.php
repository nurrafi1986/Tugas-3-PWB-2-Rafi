<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;

// ProdukController
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/detail', [ProdukController::class, 'detail']);
Route::get('/produk/stok', [ProdukController::class, 'stok']);
Route::get('/produk/tambah', [ProdukController::class, 'tambah']);
Route::get('/produk/hapus', [ProdukController::class, 'hapus']);

// UserController
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/profil', [UserController::class, 'profil']);
Route::get('/user/edit', [UserController::class, 'edit']);
Route::get('/user/update', [UserController::class, 'update']);
Route::get('/user/delete', [UserController::class, 'delete']);

// TransaksiController
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi/detail', [TransaksiController::class, 'detail']);
Route::get('/transaksi/bayar', [TransaksiController::class, 'bayar']);
Route::get('/transaksi/batal', [TransaksiController::class, 'batal']);
Route::get('/transaksi/riwayat', [TransaksiController::class, 'riwayat']);

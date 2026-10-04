<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index() {
        $transaksi = "Pembelian Kaos";
        return view('transaksi', ['transaksi' => $transaksi]);
    }

    public function detail() {
        return "Detail transaksi ditampilkan";
    }

    public function bayar() {
        return "Transaksi berhasil dibayar";
    }

    public function batal() {
        return "Transaksi dibatalkan";
    }

    public function riwayat() {
        return "Riwayat transaksi user";
    }
}

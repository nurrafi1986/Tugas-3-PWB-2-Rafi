<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $produk = "Kaos Hitam";
        return view('produk', ['produk' => $produk]);
    }

    public function detail() {
        $harga = 100000;
        return "Harga produk: Rp" . $harga;
    }

    public function stok() {
        $stok = 50;
        return "Stok tersedia: " . $stok;
    }

    public function tambah() {
        return "Form tambah produk";
    }

    public function hapus() {
        return "Produk berhasil dihapus";
    }
}

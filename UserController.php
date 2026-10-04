<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $nama = "Rafi";
        return view('user', ['nama' => $nama]);
    }

    public function profil() {
        return "Ini halaman profil user";
    }

    public function edit() {
        return "Form edit user";
    }

    public function update() {
        return "Data user berhasil diupdate";
    }

    public function delete() {
        return "User berhasil dihapus";
    }
}

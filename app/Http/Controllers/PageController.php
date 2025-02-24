<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda() {
        return view('beranda');
    }

    public function tentang() {
        return view('tentang');
    }

    public function layanan() {
        return view('layanan');
    }

    public function kontak() {
        return view('kontak');
    }
}

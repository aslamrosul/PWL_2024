<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama : Aslam Rosul Ahmad <br> NIM : 2341720195';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' .$id;
    }

}

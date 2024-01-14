<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfigurasiController extends Controller
{
    public function index() {
        return view('dashboard.konfigurasiumum', [
            'title' => 'Konfigurasi Umum',
            'active' => 'umum '
        ]);
    }

    public function indexicon() {
        return view('dashboard.konfigurasiicon', [
            'title' => 'Konfigurasi Icon',
            'active' => 'icon '
        ]);
    }

    public function indexlogo() {
        return view('dashboard.konfigurasilogo', [
            'title' => 'Konfigurasi Logo',
            'active' => 'logo '
        ]);
    }
}
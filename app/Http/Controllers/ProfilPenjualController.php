<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilPenjual;
use Illuminate\Support\Facades\Auth;

class ProfilPenjualController extends Controller
{

    public function index()
    {
    //     // Mengambil data dari tabel profile_penjual berdasarkan user_id
    //     $user = Auth::user();

    // // // Pastikan user telah memiliki profil penjual
    // // if ($user) {
    // //     $profilPenjual = ProfilPenjual::where('user_id', $user->id)->first();
    // // } else {
    // //     // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
    // //     $profilPenjual = null;
    // // }
    // $profilPenjual = ProfilPenjual::all();

    //     dd($profilPenjual);

        // Kirimkan data ke tampilan Blade
        return view('dashboard.konfigurasiumum', [
            'title' => 'Konfigurasi Umum',
            'active' => 'umum '
        ]);
    }

}
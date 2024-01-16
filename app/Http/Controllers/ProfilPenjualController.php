<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilPenjual;
use Illuminate\Support\Facades\Auth;

class ProfilPenjualController extends Controller
{

    public function index()
    {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
    if ($user) {
        $pp = ProfilPenjual::where('user_id', $user->id)->first();
    } else {
        // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
        $pp = null;
    }


    return view('dashboardFurea.layouts.app',[
        "title" => "fureaaa",
        "activee" => "furea",
        "pp" => $pp
    ]);
    }

}
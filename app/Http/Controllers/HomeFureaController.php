<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilPenjual;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;

class HomeFureaController extends Controller
{
    private function getUserAndProfilPenjual() {
        $user = Auth::user();
        $pp = $user ? ProfilPenjual::where('user_id', $user->id)->first() : null;
    
        return [
            'user' => $user,
            'pp' => $pp,
        ];
    }
    
    public function index() {
        $data = $this->getUserAndProfilPenjual();
        $barang = Barang::all();
        $barangcarousel = Barang::leftJoin('categories', 'barangs.category_id', '=', 'categories.id')
    ->inRandomOrder()
    ->limit(3)
    ->get(['barangs.*', 'categories.name']);
    
        return view('dashboardFurea.layouts.app', [
            'title' => 'fureaaa',
            'activee' => 'furea',
            'pp' => $data['pp'],
            'barang' => $barang,
            'dataCarousel' => $barangcarousel,
        ]);
    }

    public function shopfurea() {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
    if ($user) {
        $pp = ProfilPenjual::where('user_id', $user->id)->first();
    } else {
        // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
        $pp = null;
    }
    $barang = Barang::all();

    return view('dashboardFurea.posts.index',[
        "title" => "fureaaa",
        "activee" => "furea",
        "pp" => $pp,
        'barang' => $barang
    ]);
    }

    public function about() {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
    if ($user) {
        $pp = ProfilPenjual::where('user_id', $user->id)->first();
    } else {
        // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
        $pp = null;
    }
    $barang = Barang::all();

    return view('dashboardFurea.posts.about',[
        "title" => "fureaaa",
        "activee" => "furea",
        "pp" => $pp,
        'barang' => $barang
    ]);
    }

    public function contact() {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
    if ($user) {
        $pp = ProfilPenjual::where('user_id', $user->id)->first();
    } else {
        // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
        $pp = null;
    }
    $barang = Barang::all();

    return view('dashboardFurea.posts.contact',[
        "title" => "fureaaa",
        "activee" => "furea",
        "pp" => $pp,
        'barang' => $barang
    ]);
    }
}
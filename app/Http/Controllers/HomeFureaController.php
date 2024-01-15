<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilPenjual;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use Illuminate\Support\Carbon;
use App\Models\Category;

class HomeFureaController extends Controller
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
        $barang = Barang::all();
        $barangterbaru = Barang::whereDate('created_at', Carbon::today())->orderBy('created_at', 'desc')->get();
        $categories = Category::all();

        return view('dashboardFurea.layouts.app',[
            "title" => "fureaaa",
            "activee" => "furea",
            "pp" => $pp,
            'barang' => $barang,
            'barangterbaru' => $barangterbaru,
            'categories' => $categories
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


    public function account() {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
        if ($user) {
            $pp = ProfilPenjual::where('user_id', $user->id)->first();
        } else {
            // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
            $pp = null;
        }
        $barang = Barang::all();

        return view('dashboardFurea.posts.account',[
            "title" => "fureaaa",
            "activee" => "furea",
            "pp" => $pp,
            'barang' => $barang
        ]);
    }

    public function address() {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
        if ($user) {
            $pp = ProfilPenjual::where('user_id', $user->id)->first();
        } else {
            // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
            $pp = null;
        }
        $barang = Barang::all();

        return view('dashboardFurea.posts.address',[
            "title" => "fureaaa",
            "activee" => "furea",
            "pp" => $pp,
            'barang' => $barang
        ]);
    }

    public function myprofile() {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
        if ($user) {
            $pp = ProfilPenjual::where('user_id', $user->id)->first();
        } else {
            // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
            $pp = null;
        }
        $barang = Barang::all();

        return view('dashboardFurea.posts.myprofile',[
            "title" => "fureaaa",
            "activee" => "furea",
            "pp" => $pp,
            'barang' => $barang
        ]);
    }

    public function wishlist() {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
        if ($user) {
            $pp = ProfilPenjual::where('user_id', $user->id)->first();
        } else {
            // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
            $pp = null;
        }
        $barang = Barang::all();
        $barangterbaru = Barang::whereDate('created_at', Carbon::today())->orderBy('created_at', 'desc')->get();

        return view('dashboardFurea.posts.wishlist',[
            "title" => "fureaaa",
            "activee" => "furea",
            "pp" => $pp,
            'barang' => $barang,
            'barangterbaru' => $barangterbaru,
        ]);
    }
}
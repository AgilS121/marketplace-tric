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
    private function getUserAndProfilPenjual() {
        $user = Auth::user();
        $pp = $user ? ProfilPenjual::where('user_id', $user->id)->first() : null;

        return [
            'user' => $user,
            'pp' => $pp,
        ];
    }

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
        $barangcarousel = Barang::leftJoin('categories', 'barangs.category_id', '=', 'categories.id')
    ->inRandomOrder()
    ->limit(3)
    ->get(['barangs.*', 'categories.name']);

        return view('dashboardFurea.layouts.app',[
            "title" => "fureaaa",
            "activee" => "furea",
            "pp" => $pp,
            'barang' => $barang,
            'barangterbaru' => $barangterbaru,
            'categories' => $categories,
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

    public function detail($slug) {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
        if ($user) {
            $pp = ProfilPenjual::where('user_id', $user->id)->first();
        } else {
            // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
            $pp = null;
        }
        $barang = Barang::where('slug', $slug)->get();
        $barangterbaru = Barang::whereDate('created_at', Carbon::today())->orderBy('created_at', 'desc')->get();

        return view('dashboardFurea.posts.detail',[
            "title" => "fureaaa",
            "activee" => "furea",
            "pp" => $pp,
            'barang' => $barang,
            'barangterbaru' => $barangterbaru,
        ]);
    }
}

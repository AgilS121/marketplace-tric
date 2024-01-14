<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilPenjual;
use Illuminate\Support\Facades\Auth;

class KonfigurasiController extends Controller
{


    public function index() {

                // Mengambil data dari tabel profile_penjual berdasarkan user_id
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
    if ($user) {
        $pp = ProfilPenjual::where('user_id', $user->id)->first();
    } else {
        // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
        $pp = null;
    }

        return view('dashboard.konfigurasiumum', [
            'title' => 'Konfigurasi Umum',
            'active' => 'umum ',
            'pp' => $pp
        ]);
    }

    public function indexicon() {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
    if ($user) {
        $pp = ProfilPenjual::where('user_id', $user->id)->first();
    } else {
        // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
        $pp = null;
    }

        return view('dashboard.konfigurasiicon', [
            'title' => 'Konfigurasi Icon',
            'active' => 'icon ',
            'pp' => $pp
        ]);
    }

    public function indexlogo() {
        $user = Auth::user();

    // // Pastikan user telah memiliki profil penjual
    if ($user) {
        $pp = ProfilPenjual::where('user_id', $user->id)->first();
    } else {
        // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
        $pp = null;
    }

        return view('dashboard.konfigurasilogo', [
            'title' => 'Konfigurasi Logo',
            'active' => 'logo ',
            'pp' => $pp
        ]);
    }



    public function ambildata(){
        $data = DB::table('profile_penjual')
        ->get();

    // Mengembalikan data dalam format JSON
    return response()->json($data);
    }

    public function getPenjualById($id)
    {
        // Assuming you have a 'Barang' model
        $data = ProfilPenjual::find($id);

        // Return product details as JSON response
        return response()->json($data);
    }

    public function updatePenjual(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'store_name' => 'required|string|max:255',
            'store_description' => 'required|string',
            'store_address' => 'required|max:255',
            'store_phone_number' => 'required|max:255' // Add validation rule for the image
        ]);

        // Find the product by ID

        $penjual = ProfilPenjual::findOrFail($validatedData['id']);

        // Save the changes
        $penjual->save();

        // Jika penyimpanan berhasil, kirim respons JSON sukses
        return response()->json(['message' => 'Product updated successfully', 'product' => $product], 200);
    }



}
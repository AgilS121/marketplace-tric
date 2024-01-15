<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilPenjual;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function getPenjualById()
    {
        // Mengambil ID user yang sedang login
        $userId = Auth::user()->id;

        // Mengambil data ProfilPenjual berdasarkan ID user
        $data = ProfilPenjual::where('user_id', $userId)->first();

        // Return product details as JSON response
        return response()->json($data);
    }

    public function updatePenjual(Request $request)
{
    try {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'id' => 'required|exists:profile_penjual,id', // Validate existence of the ID
            'store_name' => 'required|string|max:255',
            'store_description' => 'required|string',
            'store_address' => 'required|max:255',
            'store_phone_number' => 'required|max:255'
        ]);

        // Find the product by ID
        $penjual = ProfilPenjual::findOrFail($validatedData['id']);

        // Update the attributes
        $penjual->update([
            'store_name' => $validatedData['store_name'],
            'store_description' => $validatedData['store_description'],
            'store_address' => $validatedData['store_address'],
            'store_phone_number' => $validatedData['store_phone_number'],
        ]);

        // Jika penyimpanan berhasil, kirim respons JSON sukses
        return response()->json(['message' => 'Data updated successfully', 'data' => $penjual], 200);
    } catch (\Exception $e) {
        // Tangkap dan tangani kesalahan
        return response()->json(['message' => 'Error updating data', 'error' => $e->getMessage()], 500);
    }
}

public function updateIconPenjual(Request $request)
{
    try {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'id' => 'required|exists:profile_penjual,id', // Validate existence of the ID
            'store_icon' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Find the penjual by ID
        $penjual = ProfilPenjual::findOrFail($validatedData['id']);

        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('store_icon')) {
            // Proses upload gambar
            $image = $request->file('store_icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);

            // Hapus gambar lama dari penyimpanan
            if ($penjual->store_icon) {
                Storage::delete('public/images/' . $penjual->store_icon);
            }

            // Update atribut gambar penjual
            $penjual->store_icon = $imageName;
        }

        // Simpan perubahan
        $penjual->update();

        // Jika penyimpanan berhasil, kirim respons JSON sukses
        return response()->json(['message' => 'Data updated successfully', 'data' => $penjual], 200);
    } catch (\Exception $e) {
        // Tangkap dan tangani kesalahan
        return response()->json(['message' => 'Error updating data', 'error' => $e->getMessage()], 500);
    }
}

public function updateLogoPenjual(Request $request)
{
    try {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'id' => 'required|exists:profile_penjual,id', // Validate existence of the ID
            'store_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Find the penjual by ID
        $penjual = ProfilPenjual::findOrFail($validatedData['id']);

        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('store_logo')) {
            // Proses upload gambar
            $image = $request->file('store_logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);

            // Hapus gambar lama dari penyimpanan
            if ($penjual->store_logo) {
                Storage::delete('public/images/' . $penjual->store_logo);
            }

            // Update atribut gambar penjual
            $penjual->store_logo = $imageName;
        }

        // Simpan perubahan
        $penjual->update();

        // Jika penyimpanan berhasil, kirim respons JSON sukses
        return response()->json(['message' => 'Data updated successfully', 'data' => $penjual], 200);
    } catch (\Exception $e) {
        // Tangkap dan tangani kesalahan
        return response()->json(['message' => 'Error updating data', 'error' => $e->getMessage()], 500);
    }
}


}
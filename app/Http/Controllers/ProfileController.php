<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();

        // // Pastikan user telah memiliki profil penjual
        if ($user) {
            $pp = Profile::where('user_id', $user->id)->first();
        } else {
            // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
            $pp = null;
        }

        return view('dashboardFurea.posts.address',[
            "title" => "product",
            "pp" => $pp

        ]);
    }

    public function ambilprofilewhereid()
{
    $user = Auth::user();

    $profileData = DB::table('profile')
            ->where('profile.user_id', '=', $user->id)
            ->select('profile.*')
            ->get();

    // Mengembalikan data dalam format JSON
    return response()->json($profileData);
}


    public function getProfileById($id)
    {
        // Assuming you have a 'Barang' model
        $profile = Profile::find($id);

        // Return profile details as JSON response
        return response()->json($profile);
    }

    public function updateProfile(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|numeric',
        ]);

        // Find the product by ID
        $validatedData['user_id'] =  Auth::user()->id;

        $profilData = Profile::findOrFail($validatedData['id']);

        // Periksa apakah produk memiliki gambar yang sudah ada

        $profilData->full_name = $validatedData['full_name'];
        $profilData->description = $validatedData['description'];
        $profilData->user_id = $validatedData['user_id'];
        $profilData->address = $validatedData['address'];
        $profilData->phone = $validatedData['phone'];

        $profilData->save();

        // Jika penyimpanan berhasil, kirim respons JSON sukses
        return response()->json(['message' => 'Profile updated successfully', 'profilData' => $profilData], 200);
    }


public function store(Request $request)
{
    // Validate data received from the form
    $validatedData = $request->validate([
        'full_name' => 'required|string|max:255',
        'description' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|numeric',
    ]);

    // Set the user_id to the ID of the authenticated user
    $validatedData['user_id'] =  Auth::user()->id;

    // Process the uploaded file (if any)

    // Save the new profile data to the database
    $profileData = Profile::create($validatedData);

    // If the storage is successful, send a JSON response
    if ($profileData) {
        return response()->json(['message' => 'Profile created successfully', 'profileData' => $profileData], 201);
    }

    // If unsuccessful, send a JSON response with an error message
    return response()->json(['message' => 'Failed to create Profile'], 500);
}


    public function deleteProfile($id)
    {
        // Find the product by ID
        $profilData = Profile::find($id);

        if (!$profilData) {
            // Handle the case where the profilData is not found
            return response()->json(['message' => 'profilData not found'], 404);
        }

        // Delete the profilData
        $profilData->delete();

        // You can return a success message if needed
        return response()->json(['message' => 'Profile deleted successfully']);
    }
}
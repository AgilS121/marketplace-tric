<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\ProfilPenjual;
use App\Http\Requests\StoreWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();
        $pp = $user ? ProfilPenjual::where('user_id', $user->id)->first() : null;
    
      
    

        // Ambil data wishlist yang di-join dengan tabel barang
        $wishlistItems = Wishlist::with('barang', 'barang.category')
            ->where('user_id', $userId)
            ->get();
     
        return view('dashboardFurea.posts.wishlist',["wishlist" => $wishlistItems,   'pp' => $pp]);
    }
    public function ambilWishlist()
    {
        $userId = Auth::id();
        $user = Auth::user();
        $pp = $user ? ProfilPenjual::where('user_id', $user->id)->first() : null;
    
        // Ambil data wishlist yang di-join dengan tabel barang dan category
        $wishlistItems = Wishlist::with('barang', 'barang.category')
            ->where('user_id', $userId)
            ->get();
    
        // Mengembalikan data sebagai JSON
        return response()->json([
            'wishlist' => $wishlistItems,
            'profil_penjual' => $pp,
            'jumlah_wishlist' => $wishlistItems->count(), // Menambahkan jumlah wishlist
        ]);
    }
    public function hapusWishlist($barang_id)
    {
        $userId = Auth::id();

        Wishlist::where('user_id', $userId)
            ->where('barang_id', $barang_id)
            ->delete();

        return response()->json(['message' => 'Item berhasil dihapus dari wishlist.']);
    }
    
    public function tambahWishlist(Request $request)
{
    try {
        $userId = Auth::id();

        $data = [
            'user_id' => $userId,
            'barang_id' => $request->input('barang_id'),
        ];

        Wishlist::create($data);

        return response()->json(['message' => 'Item berhasil ditambahkan ke wishlist.']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWishlistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWishlistRequest $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlist)
    {
        //
    }
}

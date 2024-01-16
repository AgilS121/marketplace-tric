<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Barang;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
    public function store(StoreCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $productId = $request->input('product_id');
        $newQuantity = $request->input('new_quantity');
        $newTotal = $request->input('new_total');

        // Dapatkan ID pengguna yang sedang login
        $userId = Auth::id();

        // Temukan atau buat item keranjang berdasarkan ID produk dan ID pengguna
        $cartItem = Cart::where('barang_id', $productId)
            ->where('user_id', $userId)
            ->first();

        if (!$cartItem) {
            // Jika item keranjang tidak ditemukan, buat yang baru
            $cartItem = new CartItem();
            $cartItem->product_id = $productId;
            $cartItem->user_id = $userId;
        }

        // Update jumlah dan total item keranjang
        $cartItem->quantity = $newQuantity;
        $cartItem->total = $newTotal;
        $cartItem->save();

        // Kirim respons (misalnya, status berhasil)
        return response()->json(['status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function addToCart(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'barang_id' => 'required',
        ]);

        // Ambil data barang dari database berdasarkan ID
        $productId = $request->input('barang_id');
        $product = Barang::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Barang tidak ditemukan.'], 404);
        }

        $existingCartItem = Cart::where('user_id', auth()->id())
        ->where('barang_id', $productId)
        ->first();

    if ($existingCartItem) {
        // Barang sudah ada di keranjang, Anda bisa melakukan tindakan tambahan jika diperlukan
        return response()->json(['message' => 'The item is already in the cart']);
    }

        // Simpan barang ke keranjang
        $cartItem = new Cart([
            'user_id' => auth()->id(), // Sesuaikan dengan metode otentikasi yang Anda gunakan
            'barang_id' => $productId,
            'quantity' => 1, // Sesuaikan dengan kebutuhan
            'price' => $product->price, // Sesuaikan dengan kolom harga di tabel products
            'total' => $product->price, // Sesuaikan dengan kebutuhan atau gunakan $quantity * $product->price
        ]);

        $cartItem->save();

        return response()->json(['message' => 'Item successfully added to cart']);
    }
    public function getCartCount()
    {
        // Ambil jumlah item dalam keranjang berdasarkan user_id (sesuai kebutuhan Anda)
        $userId = auth()->id(); // Menggunakan id pengguna yang sedang login
        $cartCount = Cart::where('user_id', $userId)->count();

        // Return jumlah keranjang sebagai respons JSON
        return response()->json(['cart_count' => $cartCount]);
    }
    public function getCartData()
{
    $cartData = Cart::join('barangs', 'carts.barang_id', '=', 'barangs.id')
        ->select('carts.*', 'barangs.nama_barang', 'barangs.category_id', 'barangs.price', 'barangs.image')
        ->where('carts.user_id', auth()->id()) // Assuming you have user authentication
        ->get();

    return response()->json(['cartData' => $cartData]);
}

}
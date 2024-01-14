<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Barang;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\ProfilPenjual;

class AdminProduct extends Controller
{
    public function index(){
        $user = Auth::user();

        // // Pastikan user telah memiliki profil penjual
        if ($user) {
            $pp = ProfilPenjual::where('user_id', $user->id)->first();
        } else {
            // Jika user tidak ditemukan, atur $profilPenjual menjadi null atau sesuaikan dengan kebutuhan
            $pp = null;
        }


        return view('dashboard.product',[
            "title" => "product",
            "pp" => $pp
        ]);
    }
    public function ambilbarang(){
        $barangData = DB::table('barangs')
        ->join('categories', 'barangs.category_id', '=', 'categories.id')
        ->select('barangs.*', 'categories.name as category_name')
        ->get();

    // Mengembalikan data dalam format JSON
    return response()->json($barangData);
    }
    public function getProductById($id)
    {
        // Assuming you have a 'Barang' model
        $product = Barang::find($id);

        // Return product details as JSON response
        return response()->json($product);
    }
    public function updateProduct(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'id' => 'required|exists:barangs,id',
            'nama_barang' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'slug' => [
                'required',
                Rule::unique('barangs')->ignore($request->id),
            ],
            'body' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation rule for the image
        ]);

        // Find the product by ID

        $product = Barang::findOrFail($validatedData['id']);

        // Periksa apakah produk memiliki gambar yang sudah ada
        if ($product->image) {
            // Hapus gambar lama dari penyimpanan
            Storage::delete('public/images/' . $product->image);
        }
        // Update product details
        $product->nama_barang = $validatedData['nama_barang'];
        $product->price = $validatedData['price'];
        $product->category_id = $validatedData['category_id'];
        $product->user_id = $validatedData['user_id'];
        $product->slug = $validatedData['slug'];
        $product->body = $validatedData['body'];

        // Handle image upload
        if ($request->hasFile('image')) {
            // Process image upload here
            // Similar to what you did in the store method
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);

            // Update product's image field
            $product->image = $imageName;
        }

        // Save the changes
        $product->save();

        // Jika penyimpanan berhasil, kirim respons JSON sukses
        return response()->json(['message' => 'Product updated successfully', 'product' => $product], 200);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',

            'slug' => 'required|unique:barangs', // asumsi bahwa slug harus unik di dalam tabel products
            'body' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk file gambar

        ]);
        // Proses file gambar yang diunggah
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName); // Simpan gambar ke dalam penyimpanan

        // Simpan nama file gambar ke dalam database
        $validatedData['image'] = $imageName;
    }


        // Simpan data produk baru ke dalam database
        $product = Barang::create($validatedData);

        // Jika penyimpanan berhasil, kirim respons JSON
        if ($product) {
            return response()->json(['message' => 'Product created successfully', 'product' => $product], 201);
        }

        // Jika gagal, kirim respons JSON dengan pesan error
        return response()->json(['message' => 'Failed to create product'], 500);
    }
    public function deleteProduct($id)
    {
        // Find the product by ID
        $product = Barang::find($id);

        if (!$product) {
            // Handle the case where the product is not found
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Delete the product
        $product->delete();

        // You can return a success message if needed
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
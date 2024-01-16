<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'barang_id']; // Ubah 'product_id' menjadi 'barang_id'

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id'); // Sesuaikan dengan model Barang
    }
}

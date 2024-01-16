<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';

    protected $guarded = ['id'];

    protected $fillable = ['user_id', 'full_name', 'description', 'address', 'phone']; // Sesuaikan dengan kolom-kolom yang akan diisi

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilPenjual extends Model
{
    use HasFactory;
    protected $table = 'profile_penjual';

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
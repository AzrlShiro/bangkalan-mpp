<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name']; // Pastikan 'gambar' dan 'nama_instansi' ada dalam fillable
}

<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Ubah dari Model ke Authenticatable
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable // Pastikan untuk mengextends Authenticatable
{
    use Notifiable;

    protected $fillable = ['email', 'password'];

    // Jika Anda ingin menggunakan hashing untuk password
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}

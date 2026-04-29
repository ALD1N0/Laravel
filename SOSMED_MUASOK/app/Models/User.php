<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
class User extends Authenticatable 
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'password',  // Pastikan password terisi
        'profile_picture',
        'bio',
    ];

    protected $hidden = [
        'password',  // Agar password tidak terlihat saat model diubah menjadi array atau JSON
        'remember_token',
    ];

    public $timestamps = true;

    // Hash password secara otomatis ketika diset
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
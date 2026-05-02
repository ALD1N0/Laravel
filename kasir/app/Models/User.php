<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users'; // pastikan sesuai nama tabel
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'id_user');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public function transaksis()
{
    return $this->hasMany(Transaksi::class, 'id_user');
}
}

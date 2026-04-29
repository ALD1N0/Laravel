<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Santri extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'santri';

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'alamat',
        'nama_orang_tua',
        'kontak_orang_tua',
    ];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class,'santri_id');
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }

    public function uangSaku()
    {
        return $this->hasMany(UangSaku::class);
    }

    public function diskusi()
    {
        return $this->hasMany(Diskusi::class, 'pengirim_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'pesan', 'penerima_id', 'tanggal_kirim', 'status'];

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'penerima_id');
    }
}

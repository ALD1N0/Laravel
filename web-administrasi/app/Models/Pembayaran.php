<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';

    protected $fillable = [
        'santri_id',
        'jumlah',
        'tanggal',
        'status',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class,'santri_id');
    }
}


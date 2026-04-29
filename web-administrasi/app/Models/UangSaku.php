<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangSaku extends Model
{
    use HasFactory;
    protected $table = 'uang_saku';

    protected $fillable = [
        'santri_id',
        'jumlah',
        'deskripsi',
        'tanggal',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}



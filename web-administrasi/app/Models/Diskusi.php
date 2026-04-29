<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    use HasFactory;
    protected $table = 'diskusi';

    protected $fillable = [
        'pengirim_id',
        'pesan',
    ];

    public function pengirim()
    {
        return $this->belongsTo(Santri::class, 'pengirim_id');
    }
}



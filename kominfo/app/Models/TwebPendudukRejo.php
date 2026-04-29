<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwebPendudukRejo extends Model
{
    use HasFactory;

    protected $connection = "mysql_rejuno";
    protected $table = 'tweb_penduduk';
    protected $primaryKey = 'id';
    public $incrementing = true; // atau false jika UUID
    protected $keyType = 'int'; // atau 'string' jika UUID

    protected $fillable = [
        'id',
        'rt',
        'rw',
        'dusun',
        'id_kepala',
        'lat',
        'lng',
        'zoom',
        'path',
        'map_tipe',
        'warna',
        'urut',
        'urut_cetak'
    ];

     public function cluster()
    {
    return $this->belongsTo(clusterrejo::class, 'id_cluster', 'id');
    }
}

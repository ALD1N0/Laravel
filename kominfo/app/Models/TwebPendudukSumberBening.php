<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwebPendudukSumberBening extends Model
{
    use HasFactory;

    protected $connection = "mysql_sumberbening";
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
    return $this->belongsTo(clustersumberbening::class, 'id_cluster', 'id');
    }
}

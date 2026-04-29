<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clustersumber extends Model
{
    
    use HasFactory;
    protected $connection = "mysql";
    protected $table = 'tweb_wil_clusterdesa'; 
    protected $primaryKey = 'id';
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
     public function penduduk()
    {
        return $this->hasMany(TwebPendudukSumberBening::class, 'id_cluster', 'id');
    }
}

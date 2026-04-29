<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clusterrejo extends Model
{
    use HasFactory;

    protected $connection = "mysql_rejuno";


    protected $table = 'tweb_wil_clusterdesa';
    protected $primaryKey = 'id';
    public $incrementing = true; // sesuaikan jika id Anda integer autoincrement
    protected $keyType = 'int';

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
        return $this->hasMany(twebpendudukrejo::class, 'id_cluster', 'id');
    }
    
public function kepala()
    {
        return $this->belongsTo(twebpendudukrejo::class, 'id_kepala', 'id');
    }
}

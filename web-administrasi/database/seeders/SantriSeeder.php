<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santri;

class SantriSeeder extends Seeder
{
    public function run()
    {
        Santri::create([
            'nama' => 'Santri Dummy 1',
            'tanggal_lahir' => '2000-01-01',
            'alamat' => 'Jl. Dummy No.1',
            'nama_orang_tua' => 'Orang Tua Dummy',
            'kontak_orang_tua' => '08123456789',
        ]);

        Santri::create([
            'nama' => 'Santri Dummy 2',
            'tanggal_lahir' => '2001-02-01',
            'alamat' => 'Jl. Dummy No.2',
            'nama_orang_tua' => 'Orang Tua Dummy 2',
            'kontak_orang_tua' => '08123456780',
        ]);
    }
}


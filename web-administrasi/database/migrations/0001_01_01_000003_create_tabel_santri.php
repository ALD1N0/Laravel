<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelSantri extends Migration
{
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('nama_orang_tua');
            $table->string('kontak_orang_tua');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('santri');
    }
}


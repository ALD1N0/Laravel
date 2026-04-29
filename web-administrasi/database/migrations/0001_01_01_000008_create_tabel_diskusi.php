<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelDiskusi extends Migration
{
    public function up()
    {
        Schema::create('diskusi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengirim_id')->constrained('santri')->onDelete('cascade');
            $table->text('pesan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diskusi');
    }
}


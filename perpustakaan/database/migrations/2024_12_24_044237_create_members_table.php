<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('members', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('name'); // Nama anggota
        $table->string('email')->unique(); // Email anggota (unik)
        $table->string('phone'); // Nomor telepon
        $table->text('address'); // Alamat
        $table->timestamps(); // Kolom created_at dan updated_at
    });
}

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};

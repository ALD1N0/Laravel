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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->constrained('users'); // pemilik produk (penjual)
            $table->string('nama_product', 255);
            $table->text('deskripsi');
            $table->integer('harga');
            $table->integer('stok')->default(1);
            $table->string('kondisi')->default('bekas'); // bisa bekas atau baru
            $table->string('image_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};

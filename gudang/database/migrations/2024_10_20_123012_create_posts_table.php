<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // ini akan membuat kolom 'post_id' AUTO_INCREMENT dan sebagai PRIMARY KEY
            $table->unsignedBigInteger('user_id'); // relasi ke tabel users
            $table->text('content'); // konten post
            $table->string('image_url')->nullable(); // URL gambar (opsional)
            $table->timestamps(); // kolom created_at dan updated_at otomatis

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

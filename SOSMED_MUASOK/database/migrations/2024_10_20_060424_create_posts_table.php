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
        Schema::create('Posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->unsignedInteger('user_id');
            $table->text('content');
            $table->string('image_url')->nullable();
            $table->timestamp('created_at')->useCurrent();
    
            // Foreign key constraint
            $table->foreign('user_id')->references('user_id')->on('Users')->onDelete('cascade');
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
};

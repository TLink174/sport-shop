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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->longText('content');
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_user');
            $table->string('image_avatar')->nullable();
            $table->text('image_path')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_user')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};

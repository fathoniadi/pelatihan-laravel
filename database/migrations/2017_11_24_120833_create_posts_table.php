<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('judul');
            $table->longText('deskripsi')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'user_post_fk')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id', 'category_post_fk')->references('id')->on('categories')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('posts');
    }
}

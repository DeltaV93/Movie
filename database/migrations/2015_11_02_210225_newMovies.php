<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class NewMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newMovies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('synopsis');
            $table->string('image');
            $table->timestamp('release_date');
            $table->string('director');
            $table->string('writer_1');
            $table->string('writer_2')->nullable();
            $table->string('actor_1');
            $table->string('actor_2');
            $table->string('actor_3')->nullable();
            $table->string('rating');
            $table->string('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('newMovies');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersKategorijeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_kategorije', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->index()->unsigned();
            $table->integer('kategorije_id')->index()->unsigned();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('kategorije_id')->references('id')->on('kategorije');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_kategorije');
    }
}

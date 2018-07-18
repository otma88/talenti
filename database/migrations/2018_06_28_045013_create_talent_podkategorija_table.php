<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentPodkategorijaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_podkategorija', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategorije_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->text('iskustvo')->nullable();
            $table->timestamps();

            $table->foreign('kategorije_id')->references('id')->on('kategorije');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talent_podkategorija');
    }
}

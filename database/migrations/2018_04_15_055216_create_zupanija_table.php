<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZupanijaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zupanija', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('drzava_id')->index()->unsigned();
            $table->string('name');
            $table->timestamps();

            $table->foreign('drzava_id')->references('id')->on('drzava');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zupanija');
    }
}

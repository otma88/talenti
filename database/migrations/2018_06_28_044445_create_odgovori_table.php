<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOdgovoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odgovori', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pitanja_id')->index()->unsigned();
            $table->string('odgovor');
            $table->timestamps();

            $table->foreign('pitanja_id')->references('id')->on('pitanja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odgovori');
    }
}

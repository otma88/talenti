<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('inputs', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('pitanja_id')->index()->unsigned();
          $table->integer('kategorije_user_id')->index()->unsigned();
          $table->integer('value1')->index()->unsigned()->nullable();
          $table->integer('value2')->index()->unsigned()->nullable();
          $table->timestamps();

          $table->foreign('pitanja_id')->references('id')->on('pitanja');
          $table->foreign('kategorije_user_id')->references('id')->on('kategorije_user');
          $table->foreign('value1')->references('id')->on('odgovori');
          $table->foreign('value2')->references('id')->on('odgovori');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputs');
    }
}

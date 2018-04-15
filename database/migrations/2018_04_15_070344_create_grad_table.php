<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zupanija_id')->index()->unsigned();
            $table->string('name');
            $table->string('tip_jedinice');
            $table->timestamps();

            $table->foreign('zupanija_id')->references('id')->on('zupanija')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grad');
    }
}

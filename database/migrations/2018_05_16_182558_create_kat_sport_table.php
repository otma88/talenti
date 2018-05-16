<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKatSportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kat_sport', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategorije_id')->index()->unsigned()->default(1);
            $table->integer('user_id')->index()->unsigned();
            $table->integer('poz_nog_id')->index()->unsigned()->nullable();
            $table->integer('poz_ruk_id')->index()->unsigned()->nullable();
            $table->integer('poz_kos_id')->index()->unsigned()->nullable();
            $table->integer('discip_atl_id')->index()->unsigned()->nullable();
            $table->integer('discip_bor_id')->index()->unsigned()->nullable();
            $table->integer('pref_noga_id')->index()->unsigned()->nullable();
            $table->integer('pref_ruka_id')->index()->unsigned()->nullable();
            $table->text('iskustvo')->nullable();
            $table->timestamps();

            $table->foreign('kategorije_id')->references('id')->on('kategorije');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('poz_nog_id')->references('id')->on('inputs');
            $table->foreign('poz_ruk_id')->references('id')->on('inputs');
            $table->foreign('poz_kos_id')->references('id')->on('inputs');
            $table->foreign('discip_atl_id')->references('id')->on('inputs');
            $table->foreign('discip_bor_id')->references('id')->on('inputs');
            $table->foreign('pref_noga_id')->references('id')->on('inputs');
            $table->foreign('pref_ruka_id')->references('id')->on('inputs');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kat_sport');
    }
}

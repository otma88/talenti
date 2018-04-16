<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddlocationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function($table) {
        $table->integer('drzava_id')->index()->unsigned()->nullable();
        $table->integer('zupanija_id')->index()->unsigned()->nullable();
        $table->integer('grad_id')->index()->unsigned()->nullable();

        $table->foreign('drzava_id')->references('id')->on('drzava');
        $table->foreign('zupanija_id')->references('id')->on('zupanija');
        $table->foreign('grad_id')->references('id')->on('grad');


      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('drzava_id');
          $table->dropColumn('zupanija_id');
          $table->dropColumn('grad_id');
      });
    }

}

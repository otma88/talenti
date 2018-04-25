<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddcolsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function($table) {
        $table->string('facebook')->nullable();
        $table->string('instagram')->nullable();
        $table->string('twitter')->nullable();
        $table->string('linkedin')->nullable();
        $table->integer('photo_id')->index()->unsigned()->nullable();
        $table->string('slug')->nullable();

        $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
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
          $table->dropColumn('facebook');
          $table->dropColumn('instagram');
          $table->dropColumn('twitter');
          $table->dropColumn('linkedin');
          $table->dropColumn('photo_id');
          $table->dropColumn('slug');

      });
    }
}

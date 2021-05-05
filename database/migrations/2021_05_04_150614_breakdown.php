<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Breakdown extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('breakdown', function (Blueprint $table) {
            $table->increments('id');
            $table->string('values');
            $table->integer('random_id')->unsigned();
            $table->foreign('random_id')->references('id')->on('random');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('breakdown');
    }
}

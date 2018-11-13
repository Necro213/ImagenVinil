<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstacionesConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estacion_config',function (Blueprint $table){
            $table->increments('id');
            $table->string('estacion');
            $table->string('image')->nullable();
            $table->integer('dia');
            $table->integer('diaf');
            $table->integer('mes');
            $table->integer('mesf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estacion_config');
    }
}

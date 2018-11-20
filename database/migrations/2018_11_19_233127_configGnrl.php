<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfigGnrl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configGnrl',function (Blueprint $table){
           $table->increments('id');
           $table->string('mision');
           $table->string('vision');
           $table->string('telefono');
           $table->string('direccion');
           $table->string('email');
           $table->string('facebook');
           $table->string('twitter');
           $table->string('eslogan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configGnrl');
    }
}

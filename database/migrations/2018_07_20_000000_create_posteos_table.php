<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosteosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posteos', function (Blueprint $table) {

          $table->unsignedInteger('user_id');
          $table->increments('id')->unsigned()->uniqid();
        //$table->string('name');
          $table->string('nickname')->nullable(); //usuario logueado
          $table->foreign('user_id')->references('id')->on('users');
          $table->string('local');    // donde esta el usuario tomando
          $table->string('titulopost')->nullable()  ;
          $table->string('mensajeposteado')->nullable()  ;
          $table->string('fotopost')->nullable()  ;
          $table->string('amigos')->nullable()  ;;
          $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posteos');
    }
}

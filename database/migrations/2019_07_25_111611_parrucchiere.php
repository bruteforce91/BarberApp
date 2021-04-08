<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Parrucchiere extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Parrucchiere', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome');
          $table->string('cognome');
          $table->string('comune');
          $table->integer('idSala');
          $table->timestamps();

          $table->foreign('idSala')->references('id')->on('SalaParrucchiere');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Parrucchiere');
    }
}

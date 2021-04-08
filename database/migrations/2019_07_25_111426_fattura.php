<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fattura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FatturaCliente', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idCliente');
          $table->integer('idSala');
          $table->double('saldo');
          $table->integer('idServizioEffettuato');
          $table->timestamps();

          $table->foreign('idCliente')->references('id')->on('cliente');
          $table->foreign('idSala')->references('id')->on('SalaParrucchiere');
          $table->foreign('idServizioEffettuato')->references('id')->on('TipologiaServizio');
        });
      }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FatturaCliente');
    }
}

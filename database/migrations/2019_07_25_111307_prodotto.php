<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prodotto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('prodotto', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nomeProdotto')->unique();
      $table->string('colore');
      $table->string('marca');
      $table->double('prezzo');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TipologiaServizio');
    }
}

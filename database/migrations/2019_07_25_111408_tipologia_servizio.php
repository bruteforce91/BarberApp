<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipologiaServizio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('TipologiaServizio', function (Blueprint $table) {
          $table->increments('id');
          $table->String('nomeServizio');
          $table->double('costoServizio');
          $table->integer('idProdottoUtilizato');
          $table->timestamps();
          $table->foreign('idProdottoUtilizato')->references('id')->on('prodotto');
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

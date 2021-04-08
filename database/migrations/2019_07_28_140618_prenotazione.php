<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prenotazione extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('Prenotazioneturno', function (Blueprint $table) {

           $table->unsignedInteger('id');
           $table->unsignedInteger('sala');
           $table->unsignedInteger('cliente');
           $table->unsignedInteger('tipologiaServizio');
           $table->Time('orario_prenot');
           $table->Date('Data_prenot');
           $table->timestamps();

           $table->primary(['id', 'sala','cliente','orario_prenot']);
           $table->foreign('sala')->references('id')->on('SalaParrucchiere');
           $table->foreign('cliente')->references('id')->on('cliente');
           $table->foreign('tipologiaServizio')->references('id')->on('TipologiaServizio');

       });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('PrenotazioneTurno');
     }
}

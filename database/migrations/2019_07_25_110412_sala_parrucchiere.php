<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalaParrucchiere extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('SalaParrucchiere', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome');
          $table->string('comune');
          $table->string('indirizzo');
          $table->string('genere');
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
        Schema::dropIfExists('SalaParrucchiere');
    }
}

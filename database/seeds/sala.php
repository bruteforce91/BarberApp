<?php

use Illuminate\Database\Seeder;

class sala extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('salaparrucchiere')->insert([
       'id' => 1,
       'nome' => "S&G Barber",
       'comune' => "Biancavilla",
       'indirizzo' => "via Vitt.Emanuele 596",
       'genere' => "Maschile",
       ]);

       DB::table('salaparrucchiere')->insert([
        'id' => 2,
        'nome' => "Compagnia delle Bellezze",
        'comune' => "Biancavilla",
        'indirizzo' => "viale dei Fiori 32",
        'genere' => "Femminile",
        ]);

        DB::table('salaparrucchiere')->insert([
         'id' => 3,
         'nome' => "The Barber",
         'comune' => "Biancavilla",
         'indirizzo' => "viale dei Fiori 32",
         'genere' => "Machile",
         ]);

         DB::table('salaparrucchiere')->insert([
          'id' => 4,
          'nome' => "Beauty Style",
          'comune' => "Biancavilla",
          'indirizzo' => "via Cristoforo Colombo 6",
          'genere' => "Femminile",
          ]);

  }
}

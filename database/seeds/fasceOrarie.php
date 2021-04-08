<?php

use Illuminate\Database\Seeder;

class fasceOrarie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('fasceOrarie')->insert([
       'id' => 2,
       'fasce' => 08:30:00,
       ]);
      DB::table('fasceOrarie')->insert([
        'id' => 3,
        'fasce' => 09:00:00,
        ]);
        DB::table('fasceOrarie')->insert([
         'id' => 4,
         'fasce' => 09:30:00,
         ]);
         DB::table('fasceOrarie')->insert([
          'id' => 5,
          'fasce' => 10:00:00,
          ]);
          DB::table('fasceOrarie')->insert([
           'id' => 6,
           'fasce' => 10:30:00,
           ]);
          DB::table('fasceOrarie')->insert([
            'id' => 7,
            'fasce' => 11:00:00,
            ]);
          DB::table('fasceOrarie')->insert([
             'id' => 8,
             'fasce' => 11:30:00,
             ]);
          DB::table('fasceOrarie')->insert([
              'id' => 2,
              'fasce' => 12:00:00,
              ]);
          DB::table('fasceOrarie')->insert([
               'id' => 2,
               'fasce' => 15:00:00,
               ]);
          DB::table('fasceOrarie')->insert([
                'id' => 2,
                'fasce' => 15:30:00,
                ]);
          DB::table('fasceOrarie')->insert([
                 'id' => 2,
                 'fasce' => 16:00:00,
                 ]);
          DB::table('fasceOrarie')->insert([
                  'id' => 2,
                  'fasce' => 16:30:00,
                  ]);
          DB::table('fasceOrarie')->insert([
                   'id' => 2,
                   'fasce' =>17:00:00,
                   ]);
          DB::table('fasceOrarie')->insert([
                    'id' => 2,
                    'fasce' =>17:30:00,
                    ]);
          DB::table('fasceOrarie')->insert([
                     'id' => 2,
                     'fasce' => 18:00:00,
                     ]);
          DB::table('fasceOrarie')->insert([
                      'id' => 2,
                      'fasce' => 18:30:00,
                      ]);
          DB::table('fasceOrarie')->insert([
                       'id' => 2,
                       'fasce' => 19:00:00,
                       ]);
          DB::table('fasceOrarie')->insert([
                        'id' => 2,
                        'fasce' => 19:30:00,
                        ]);
    }
}

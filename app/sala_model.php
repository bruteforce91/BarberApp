<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sala_model extends Model
{
    protected $table='salaparrucchiere';

    public function salaPrenotazioni()
    {
        return $this->hasMany('App\prenotazione','sala','id');
    }
}

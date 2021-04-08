<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipServizio_model extends Model
{
    protected $table='TipologiaServizio';


    public function tipoServPrenot()
    {
      return $this->hasMany('App\prenotazione','tipologiaServizio','id');
    }
}

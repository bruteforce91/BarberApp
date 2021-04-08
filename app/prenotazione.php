<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prenotazione extends Model
{
  protected $table='Prenotazioneturno';
  protected $fillable = [
      'sala','cliente','tipologiaServizio','orario_prenot','data_prenot',
  ];

  public function userPrenot()
  {
      return $this->belongsTo('App\User','cliente','id');
  }

  public function salaPrenot()
  {
      return $this->belongsTo('App\sala_model','sala','id');
  }
  public function prenotServizio()
  {
      return $this->belongsTo('App\tipServizio_model','tipologiaServizio','id');
  }
  
}

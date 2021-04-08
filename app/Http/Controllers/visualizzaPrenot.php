<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\prenotazione;
use App\sala_model;
use App\User;
use App\fasceOrarie_model;
use App\tipServizio_model;


class visualizzaPrenot extends Controller
{
    public function visualizza_prenot_id(){
      $sale=sala_model::all();
      $getId = Auth::user()->id;
      $prenotazioni_utente = prenotazione::where('cliente', $getId)->with('userPrenot','salaPrenot','prenotServizio')->get();
      $cont=0;
      foreach ($prenotazioni_utente as $sala => $valore) {
        $cont++;
      }
      $n_sale=[$cont];
      //memorizza tutte le fasce in un array
      $sale=sala_model::with('salaPrenotazioni')->where('id')->get();
      $sala_Selezionata=prenotazione::where('id',"$sale")->get();



      return view('visualizza_prenotazione_id',compact('prenotazioni_utente'));
    }
}

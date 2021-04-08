<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\prenotazione;
use App\sala_model;
use App\User;
use App\fasceOrarie_model;
use App\tipServizio_model;

class admin_controller extends Controller
{
  public function visualizza_all(){
    $sale=sala_model::all();
    $getId = Auth::user()->id;
    $prenotazioni_utente = prenotazione::all();
    //->with('userPrenot','salaPrenot','prenotServizio')->get();
    $cont=0;
    foreach ($prenotazioni_utente as $numero => $valore) {
      $cont++;
    }



    return view('all_visualizzazioni',compact('prenotazioni_utente','cont'));
  }

  public function visualizza_all_genere(){

    $prenotazioni_utente = prenotazione::where('id','<',1000)->with('userPrenot','salaPrenot','prenotServizio')->get();
    $cont=0;

    foreach ($prenotazioni_utente as $numero => $valore) {
      $cont++;
    }



    return view('all_visualizzazioni_genere',compact('prenotazioni_utente','cont'));
  }

  public function max(){
    $cont=0;
    $prenotazioni_utente = prenotazione::where('id','<',1000)->with('userPrenot','salaPrenot','prenotServizio')->get();
    foreach ($prenotazioni_utente as $id=> $value) {
      $get_id=$prenotazioni_utente[$id]->cliente;

    //  $prenotazioni_singolo = prenotazione::where('id',$getId)->with('userPrenot','salaPrenot','prenotServizio')->get();
      $n_prenotazioni_singolo = prenotazione::where('cliente',$get_id)->count();
      

      if($cont<$n_prenotazioni_singolo){
        $cont=$n_prenotazioni_singolo;
        $prenotazioni_singolo = prenotazione::where('cliente',$get_id)->with('userPrenot','salaPrenot','prenotServizio')->get();
      }
    }
      return view('max_prenotazioni',compact('prenotazioni_singolo','cont'));
  }
}

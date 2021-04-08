<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\prenotazione;
use App\sala_model;
use App\User;
use App\fasceOrarie_model;
use App\tipServizio_model;

class cancellaTurnoController extends Controller
{
    public function cancella(Request $request){
    
      $input=$request->input('cancella_turno');
      $id=substr($input,0,1);


      $prenotazione=prenotazione::find($id);
      $prenotazione->delete();
      return view('home');

    }




    public function cancella_page(){
      $sale=sala_model::all();
      $getId = Auth::user()->id;
      $prenotazioni_utente = prenotazione::where('cliente', $getId)->with('userPrenot','salaPrenot','prenotServizio')->get();
      $cont=0;
      foreach ($prenotazioni_utente as $sala => $valore) {
        $cont++;
      }
      $n_sale=[$cont];
      //memorizza tutte le fasce in un array
      $sale=sala_model::with('salaPrenotazioni')->where('id');



      return view('cancella',compact('prenotazioni_utente'));
    }

}

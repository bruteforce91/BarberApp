<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\prenotazione;
use App\sala_model;
use App\User;
use App\fasceOrarie_model;
use App\tipServizio_model;

class prenotazioneController extends Controller
{
  public function index()
  {
   try{
       //prendo tutte le prenotazioni e gli orari e date
       $prenotazioni=prenotazione::all();
       $ora_prenotazione=prenotazione::where('orario_prenot')->get();
       $n_prenotazioni=prenotazione::where('sala','data_prenot','orario_prenot')->get();

      //prendo tutte le fasce orarie dal Db
        $fasce=fasceOrarie_model::all();
        //$sale = sala_model::all();
        //prendo id utente loggato e il sesso
        $getId = Auth::user()->id;
        $getSesso = Auth::user()->sesso;


      $prenotazioni_utente = User::with('userPrenotazioni')->where('id', $getId)->get();
        //condizioni per la selezione delle sale da visualizzare per genere
        if($getSesso=="Maschio"){
          $sale=sala_model::where('genere', 'Maschio')->get();
        }
        if($getSesso=="Femmina"){
          $sale=sala_model::where('genere', 'Femmina')->get();
        }

        //cicli per la visualizzazione dei dati presi
        $cont=0;
        $cont_new=0;
        foreach ($sale as $key => $value) {
          $cont++;
        }

        foreach ($fasce as $fascia => $valore) {
          $cont_new++;
        }
        $n_sale=[$cont];
        $n_fasce=[$cont_new];

        //memorizza tutte le sale in un array
        foreach ($sale as $key => $value) {
          $n_sale[$key]=$sale[$key]->nome;
        }
        //memorizza tutte le fasce in un array
        foreach ($fasce as $fascia => $valore) {
          $n_fasce[$fascia]=$fasce[$fascia]->fascia;
        }
       $data=[
          'id'=>$getId
        ];

      //return response()->json($array[0]);
    return view('prenotazione',compact('n_sale','n_fasce','data','ora_prenotazione','prenotazioni','n_prenotazioni'));
  }catch (\Exception $e){
          return response()->json([
              'status' => false,
              'message' => 'Errore'
          ]);
        }
      }
  public function update(Request $request)
  {

    //dati selezionati nella view
     $selectsala2=$request->input('selezionesala');
     $selectValue = $request->input('name_date');
     $sala_Selezionata=sala_model::where('nome',"$selectsala2")->get();
     $sala_id=$sala_Selezionata[0]->id;
     $tipologiaSer=tipServizio_model::all();
     $prenot=prenotazione::where('Data_prenot',"$selectValue")->where('sala',"$sala_id")->get();
     ;

     //where('sala',"$sala_Selezionata")->get();
     //dd($prenot);

     //prendiamo tutti i turni
     $fasce=fasceOrarie_model::all();
     $cont_new=0;
     foreach ($fasce as $fascia => $valore) {
       $cont_new++;
     }
     $n_fasce=[$cont_new];
     //memorizza tutte le fasce in un array
     foreach ($fasce as $fascia => $valore) {
       $n_fasce[$fascia]=$fasce[$fascia]->fascia;
     }
     //-------------------------------
     //prendiamo i turni non disponibili
     $cont=0;
     if(sizeof($prenot) != 0){
     foreach ($prenot as $t_disab => $valore) {
       $cont++;
     }
     $turni_disabilitare=[$cont];

     foreach ($prenot as $t_disab => $valore) {
       $turni_disabilitare[$t_disab]=$prenot[$t_disab]->orario_prenot;
     }
     $count=0;
     foreach ($n_fasce as $fascia => $valore) {
       if($n_fasce[$fascia]==$turni_disabilitare[$t_disab]){
        unset($n_fasce[$count]);
       }
       $count++;
     }
       }
     //---------------------------
     //tipologie
     $cont2=0;
     foreach ($tipologiaSer as $tipologia => $valore) {
       $cont2++;
     }
     $n_tipol=[$cont2];
     //memorizzo tutte le tipologia nell'array
     foreach ($tipologiaSer as $tipologia => $valore) {
       $n_tipol[$tipologia]=$tipologiaSer[$tipologia]->nomeServizio;

     }


     return view('prenotazione_turno', compact('n_fasce','selectsala2','selectValue','n_tipol'));

  }
  public function turni(){
    $fasce=fasceOrarie_model::all();
    $cont_new=0;
    $cont=0;
    //fasce orarie
    foreach ($fasce as $fascia => $valore) {
      $cont_new++;
    }
    $n_fasce=[$cont_new];
    //memorizza tutte le fasce in un array
    foreach ($fasce as $fascia => $valore) {
      $n_fasce[$fascia]=$fasce[$fascia]->fascia;
    }
    //---------------------------
    //tipologie
    $tipologiaSer=tipServizio_model::all();
    foreach ($tipologiaSer as $tipologia => $valore) {
      $cont++;
    }
    $n_tipol=[$cont];
    //memorizzo tutte le tipologia nell'array
    foreach ($tipologiaSer as $tipologia => $valore) {
      $n_tipol[$tipologia]=$tipologiaSer[$tipologia]->nomeServizio;

    }
    return view('prenotazione_turno',compact('n_fasce','n_tipol'));
  }

  public function conferma(Request $request){
    //dal nome ricaviamo id sala
    $sala=$request->input('sala');
    $sala_Selezionata=sala_model::where('nome',"$sala")->get();
    $sala_id=$sala_Selezionata[0]->id;
    //
    $data=$request->input('data');
    $turno = $request->input('select_turno');
    //dal nome ricaviamo l id della tipologia
    $tipologia = $request->input('select_tipologia');
    $tipServizio=tipServizio_model::where('nomeServizio',"$tipologia")->get();
    $tip_id=$tipServizio[0]->id;
    //ricaviamo il costo del $servizio
    $tip_costo=$tipServizio[0]->costoServizio;

    $id=\Auth::user()->id;

    $obj = [
                    'sala' => $sala_id,
                    'cliente' => $id,
                    'tipologiaServizio' => $tip_id,
                    'orario_prenot' => $turno,
                    'data_prenot' => $data
                ];
    prenotazione::create($obj);

    return view('confirmPrenotazione',compact('turno','data','sala','tipologia'));
  }

}

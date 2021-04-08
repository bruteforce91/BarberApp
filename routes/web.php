<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Auth::routes();

Route::get('admin','HomeController@index')->name('admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('prenotazione','prenotazioneController@index')->middleware('auth');
Route::get('record','visualizzaPrenot@visualizza_prenot_id')->middleware('auth');
Route::get('delete','cancellaTurnoController@cancella_page')->middleware('auth');


//ricerca Dati
Route::post('update','prenotazioneController@update')->name('upload')->middleware('auth');
Route::get('prenotazione_turno','prenotazioneController@turni')->middleware('auth');

//conferma Dati
Route::post('conferma','prenotazioneController@conferma')->name('conferma')->middleware('auth');
//cancellazione Turno
Route::post('cancella','cancellaTurnoController@cancella')->name('cancella')->middleware('auth');

//admin
Route::get('all','admin_controller@visualizza_all')->middleware('auth');
Route::get('all_genere','admin_controller@visualizza_all_genere')->middleware('auth');
Route::get('max','admin_controller@max')->middleware('auth');

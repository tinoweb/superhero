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
Route::get('/', function(){
	return view('welcomeSuperHero');
});

Route::get('/superhero', 'SuperheroController@index')->name('SuperHero');

Route::get('/superheroNovo', 'SuperheroController@create')->name('NewSuperHero');

Route::post('/superheroStore', 'SuperheroController@store')->name('GravaSuperhero');

Route::get('/superheroMostrar/{id}', 'SuperheroController@show')->name('MostrarSuperHero');

Route::get('/superheroEditar/{id}', 'SuperheroController@edit');

Route::put('/superheroAtualizar/{id}', 'SuperheroController@update');

Route::get('/superheroDelete/{id}', 'SuperheroController@destroy')->name('deletaSuperhero');
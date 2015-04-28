<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('profil');
});


Route::get('/potensi-daerah', function()
{
	return View::make('potensidaerah');
});

Route::get('/ringkasan-apbd', function()
{
	return View::make('ringkasanapbd');
});

Route::get('/pad', function()
{
	return View::make('pad');
});

Route::get('/belanja-daerah', function()
{
	return View::make('belanjadaerah');
});

Route::get('/indikator-kerja', function()
{
	return View::make('indikatorkerja');
});




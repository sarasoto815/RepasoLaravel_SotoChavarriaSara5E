<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/validar','PruebaController@validarLogin');
Route::get('/', 'PruebaController@login');


Route::get('/pintorone',
    ['uses'=>'PruebaController@pintorone',
        'as' =>'pintorone'] );

Route::get('/pintortwo',
    ['uses'=>'PruebaController@pintortwo',
        'as' =>'pintortwo'] );

Route::get('/pintorthree',
    ['uses'=>'PruebaController@pintorthree',
        'as' =>'pintorthree'] );

Route::get('/pintorfour',
    ['uses'=>'PruebaController@pintorfour',
        'as' =>'pintorfour'] );

Route::get('/pintorfive',
    ['uses'=>'PruebaController@pintorfive',
        'as' =>'pintorfive'] );

Route::get('/acerca',
    ['uses'=>'PruebaController@acerca',
        'as' =>'acerca'] );

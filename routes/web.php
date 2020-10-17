<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('diagnostico',"DiagnosticoController@index");
Route::get('diagnostico/menu',"DiagnosticoController@create");
Route::get('consulta/{area}',"DiagnosticoController@consulta");
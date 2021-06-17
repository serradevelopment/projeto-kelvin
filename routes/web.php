<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/coordenacao', function () {
    return view('coordenador');
});

Route::get('/estagiario', function () {
    return view('estagiario');
});

Route::get('/empresa', function () {
    return view('empresa');
});

Route::get('/professor', function () {
    return view('professor');
});

Route::get('/cadastro-empresa', function () {
    return view('cadastro-empresa');
});
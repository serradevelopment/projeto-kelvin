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



//COORDENADOR
Route::get('/coordenador/login','Coordenador\Auth\LoginController@showLoginForm')->name('coordenadores.auth.login');
Route::get('/coordenador/register','Coordenador\Auth\LoginController@showRegisterForm')->name('coordenadores.auth.register');
Route::post('/coordenador/login','Coordenador\Auth\LoginController@login')->name('coordenadores.login');
Route::post('/coordenador/register','Coordenador\Auth\LoginController@register')->name('coordenadores.register');

Route::middleware('coordenadores')->namespace('Coordenador')->prefix('coordenador')->group(function(){
    Route::get('/', 'HomeController@home')->name('coordenador.home');
});



Route::get('/add', function () {
    return view('coordenadores.estagios.create');
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

//EMPRESA
Route::get('/cadastro-empresa', 'EmpresasController@registerForm');
Route::post('/cadastro-empresa', 'EmpresasController@register')->name('empresas.register');

Route::get('/login', function () {
    return view('login');
});

//PROFESSOR
Route::get('/register-professor', 'ProfessoresController@registerForm');
Route::post('/register-professor', 'ProfessoresController@register')->name('professores.register');

//ESTAGIARIO
Route::get('/register-estagiario', 'EstagiariosController@registerForm')->name('estagiarios.registerForm');
Route::post('/register-estagiario', 'EstagiariosController@register')->name('estagiarios.register');

Route::get('/estagios', function () {
    return view('estagios');
});

Route::get('/cadastrar-tarefas', function () {
    return view('cadastro-de-tarefas');
});

Route::get('/tarefas', function () {
    return view('tarefas');
});

Route::get('/detalhes-do-estagio', function () {
    return view('detalhes-do-estagio');
});

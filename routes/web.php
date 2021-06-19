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
    Route::get('/estagios/create','EstagiosController@create' )->name('coordenador.estagios.create');
    Route::get('/estagios/','EstagiosController@index' )->name('coordenador.estagios.index');
    Route::get('/estagios/{estagio}','EstagiosController@show' )->name('coordenador.estagios.show');
    Route::get('/estagios/{estagio}/tarefas/create','TarefasController@create' )->name('coordenador.estagios.tarefas.create');
    Route::post('/estagios/{estagio}/tarefas/store','TarefasController@store' )->name('coordenador.estagios.tarefas.store');
    Route::get('/estagios/{estagio}/tarefas/','TarefasController@index' )->name('coordenador.estagios.tarefas.index');
    Route::post('/estagios/store','EstagiosController@store' )->name('coordenador.estagios.store');
    Route::get('/empresas/create','EmpresasController@registerForm' )->name('coordenador.empresas.create');
    Route::post('/empresas/store','EmpresasController@store' )->name('coordenador.empresas.store');
});



//ESTAGIARIO
Route::get('/estagiario/login','Estagiario\Auth\LoginController@showLoginForm')->name('estagiarios.auth.login');
Route::get('/estagiario/register','Estagiario\Auth\LoginController@showRegisterForm')->name('estagiarios.auth.register');
Route::post('/estagiario/login','Estagiario\Auth\LoginController@login')->name('estagiarios.login');
Route::post('/estagiario/register','Estagiario\Auth\LoginController@register')->name('estagiarios.register');

Route::middleware('estagiarios')->namespace('Estagiario')->prefix('estagiario')->group(function(){
    Route::get('/', 'HomeController@home')->name('estagiario.home');
    Route::get('/estagios', 'EstagiosController@index')->name('estagiario.estagios.index');
});

//EMPRESA
Route::get('/empresa/login','Empresa\Auth\LoginController@showLoginForm')->name('empresas.auth.login');
Route::post('/empresa/login','Empresa\Auth\LoginController@login')->name('empresas.login');

Route::middleware('empresas')->namespace('Empresa')->prefix('empresa')->group(function(){
    Route::get('/', 'HomeController@home')->name('empresa.home');
    Route::get('/estagios', 'EstagiosController@index')->name('empresa.estagios.index');
});

//PROFESSOR
Route::get('/professor/login','Professor\Auth\LoginController@showLoginForm')->name('professores.auth.login');
Route::post('/professor/login','Professor\Auth\LoginController@login')->name('professores.login');
Route::get('/professor/register','Professor\Auth\LoginController@showRegisterForm')->name('professores.auth.register');
Route::post('/professor/register','Professor\Auth\LoginController@register')->name('professores.register');

Route::middleware('professores')->namespace('Professor')->prefix('professor')->group(function(){
    Route::get('/', 'HomeController@home')->name('professor.home');
    Route::get('/estagios', 'EstagiosController@index')->name('professor.estagios.index');
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

Route::get('/pdf', function () {
    return view('pdf.termo');
});

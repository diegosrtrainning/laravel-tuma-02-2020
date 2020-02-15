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
    return view('welcome');
});

Route::get('/usuarios', 'UsuariosController@listar');
Route::get('/usuarios/filtros', 'UsuariosController@listarComFiltros');

Route::get('/perfis', 'PerfisController@index')->name('listar_perfis');
Route::get('/perfis/create', 'PerfisController@create')->name('criar_perfil');
Route::post('/perfis/create', 'PerfisController@store');
Route::delete('/perfis/{id}', 'PerfisController@destroy');

Route::get('/funcionarios', 'FuncionariosController@index')->name('listar_funcionarios');
Route::get('/funcionarios/create', 'FuncionariosController@create')->name('criar_funcionario');
Route::post('/funcionarios/create', 'FuncionariosController@store');
Route::delete('/funcionarios/{id}', 'FuncionariosController@destroy');
Route::get('/funcionarios/csv', 'FuncionariosController@csv');
Route::get('/funcionarios/email', 'FuncionariosController@email');

Route::get('/autenticar', 'AutenticarController@index')->name('login');
Route::post('/autenticar', 'AutenticarController@entrar');
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

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/busca', function () {
    return view('busca');
});

Route::get('/adm_usuarios', function () {
    return view('adm_usuarios');
});

Route::get('/adm_profissionais', function () {
    return view('adm_profissionais');
});

Route::get('/adm_pedidos_recebidos', function () {
    return view('adm_pedidos_recebidos');
});

Route::get('/adm_pedidos_enviados', function () {
    return view('adm_pedidos_enviados');
});

Route::get('/adm_niveis_acesso', function () {
    return view('adm_niveis_acesso');
});

Route::get('/adm_niveis_acesso', function () {
    return view('adm_niveis_acesso');
});

Route::get('/adm_meu_cadastro', function () {
    return view('adm_meu_cadastro');
});

Route::get('/adm_cadastro_prof', function () {
    return view('adm_cadastro_prof');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

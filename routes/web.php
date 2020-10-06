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
    return view('home');
});



//teste

//tabeliao
Route::get('Tabeliao/home','ControllerTabeliao@home')->name('home');
Route::get('Tabeliao','ControllerTabeliao@tabelioes')->name('tabelioes');
Route::get('Tabeliao/adicionar','ControllerTabeliao@adicionar')->name('adicionar');
Route::post('Tabeliao/salvar','ControllerTabeliao@salvar')->name('salvar');
Route::get('Tabeliao/listar','ControllerTabeliao@listar')->name('listar');
Route::get('Tabeliao{id}','ControllerTabeliao@editar')->name('editar');
Route::put('Tabeliao{id}','ControllerTabeliao@atualizar')->name('atualizar');
Route::delete('Tabeliao{id}','ControllerTabeliao@deletar')->name('deletar');


//certidao
Route::get('certidao','ControllerCertidao@certidoes')->name('certidoes');
Route::get('Certidao/adicionar','ControllerCertidao@adicionar')->name('adicionar.certidao');
Route::post('Certidao/salvar','ControllerCertidao@salvar')->name('salvar.certidao');
Route::get('Certidao/listar','ControllerCertidao@listar')->name('listar.certidao');
Route::get('Certidao{id}','ControllerCertidao@editar')->name('editar.certidao');
Route::put('Certidao{id}','ControllerCertidao@atualizar')->name('atualizar.certidao');
Route::delete('Certidao{id}','ControllerCertidao@deletar')->name('deletar.certidao');
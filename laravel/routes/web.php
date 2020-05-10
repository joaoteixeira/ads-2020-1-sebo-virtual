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
    $livros=\App\livro::all();
    return $livros;
    
    
});

Route::get('Contato', function () {
    return view('Contato');
});
Route::get('Ajuda', function () {
    return view('Ajuda');
});
Route::get('Autor', function () {
    return view('Autor');
});
Route::get('Requerimento', function () {
    return view('Requerimento');
});
Route::get('Pesquisa', function () {
    return view('Pesquisa');
});
Route::get('Destaque', function () {
    return view('Destaque');
});
Route::get('Sugestao', function () {
    return view('Sugestao');
});
Route::get('Doacao', function () {
    return view('Doacao');
});
Route::get('Formulario', function () {
    return view('Formulario');
});

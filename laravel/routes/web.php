<?php



use Illuminate\Support\Facades\Route;
use App\Livro;
use App\Acervo;
use App\Leitor;
use App\Requisicao;
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

Route::get('/livros', function(){
    $livros = Livro::All();
    return $livros;
});

Route::get('/acervos', function(){
    $acervos = Acervo::All();
    return $acervos;
});

Route::get('/leitores', function(){
    $leitores = Leitor::All();
    return $leitores;
});

Route::get('/requisicoes', function(){
    $requisicoes = Requisicao::All();
    return $requisicoes;
});

Route::get('/', function () {
    return view('PaginaInicial');  
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
Route::get('Livro', function () {
    return view('Livro');
});




Route::resource('/clientes','ClienteController');
Route::resource('Formulario','LivroController');

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

Auth::routes();
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/produtos');
});
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produtos', 'ProdutoController@lista')->middleware('auth');
Route::get('/produtos/novo', 'ProdutoController@novo')->middleware('auth');
Route::get('/produtos/json', 'ProdutoController@listaJson')->middleware('auth');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+')->middleware('auth');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona')->middleware('auth');
Route::get('/produtos/remove/{id}', 'ProdutoController@delete')->middleware('auth')->middleware('can:delete,id');;
Route::get('/produtos/relatorioPdf', 'ProdutoController@relatorioPdf');

Route::get('/', function () {
    return phpinfo();
});


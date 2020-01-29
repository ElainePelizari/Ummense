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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuario', function() {
    return view('usuario');
});

Route::get('products', 'ProductsController@index')->name('products.index');

Route::get('/produtos', 'ProductController@index');
Route::get('/produtos/novo', 'ProductController@create');
Route::post('/produtos', 'ProductController@store');
Route::get('/produtos/detalhes/{id}', 'ProductController@show');
Route::get('/produtos/apagar/{id}', 'ProductController@destroy');
Route::get('/produtos/editar/{id}', 'ProductController@edit');
Route::post('/produtos/{id}', 'ProductController@update');


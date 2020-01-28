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

// Route::get('/produtos', 'ProdutoController@index');
// Route::get('/produtos/novo', 'ProdutoController@create');
// Route::post('/produtos', 'ProdutoController@store');
// Route::get('/produtos/detalhes/{id}', 'ProdutoController@show');
// Route::get('/produtos/apagar/{id}', 'ProdutoController@destroy');
// Route::get('/produtos/editar/{id}', 'ProdutoController@edit');
// Route::post('/produtos/{id}', 'ProdutoController@update');

Route::get('/usuario', function() {
    return view('usuario');
});

Route::get('/logar/{email}/{passwd}', function($email, $password) {
    $credentials = ['email'=>$email, 'password'=>$passwd];
    if (Auth::attempt($credentials)) {
        echo "Logado!!";
    } 
    else {
        echo "Nome ou senha inválido(a)";
    }
});

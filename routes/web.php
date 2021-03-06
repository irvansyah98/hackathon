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
Route::get('/', 'HomeController@index');
Route::get('/hasil-pencarian', 'HomeController@hasil');
Route::get('/profil', 'HomeController@profil');

Route::get('/auth/login', ['as' => 'logout', 'uses' => 'Auth\LoginController@login']);
Route::get('/auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['prefix' => 'backend', 'namespace' => '\Backend', 'middleware' => ['auth', 'role:admin' ]], function() {
    Route::get('/', array('as' => 'backend.dashboard.index', 'uses' => 'DashboardController@index'));
    Route::resource('users', 'UsersController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('toko', 'TokoController');
    Route::resource('produk', 'ProdukController');
    Route::resource('ulasan_produk', 'UlasanProdukController');
});


// Route::get('/home', 'HomeController@index');

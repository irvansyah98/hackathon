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

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'backend', 'namespace' => '\Backend', 'middleware' => ['auth', 'role:admin' ]], function() {
    Route::get('/', array('as' => 'backend.dashboard.index', 'uses' => 'DashboardController@index'));
    Route::resource('users', 'UsersController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('toko', 'TokoController');
    Route::resource('produk', 'ProdukController');
    Route::resource('ulasan_produk', 'UlasanProdukController');
});
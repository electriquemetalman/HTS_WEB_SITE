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

use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/contact', function () {
    return view('page_site.contacte');
});*/

Route::get('/contact', 'ContactController@index');

Route::post('/contact', 'ContactController@create')->name('mail_root');

Route::get('/service', 'recupController@recupServices');

Route::get('/produit', 'recupController@recupProduits');

Route::get('/ahts', function () {
    return view('page_site.ahts');
});

// les routes des pages de ladministrateur

Route::get('/login', 'LoginsController@index');

Route::post('/log', 'LoginsController@create')->name('log_root');

Route::get('/register','UtilisateursController@index');

Route::post('/users', 'UtilisateursController@create')->name('create_root');

Route::get('/AjoutService','ServiceController@index');

Route::post('/AjoutService', 'ServiceController@create')->name('service_root');

Route::get('/AjoutProduit','ProduitController@index');

Route::post('/AjoutProduit', 'ProduitController@create')->name('produit_root');



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


Route::get('/home','YslController@index');
Route::get('/search', 'SearchController@search');

Route::get('/informatique', 'YslController@informatique');
Route::get('/informatique/{sous_informatique}', 'YslController@sous_informatique');
Route::get('/vehicules', 'YslController@vehicules');
Route::get('/immobilier', 'YslController@immobilier');
Route::get('/product/{id}', 'YslController@product');


Route::get('/gestionproductsysltechno/{categorie}/{tri}/{type}','ProductController@index');
Route::get('/gestionsearchproductsysltechno/{search}/{categorie}/{tri}','SearchController@searchproduct');
Route::get('/gestionsearchpopproductsysltechno/{search}/{categorie}','SearchController@searchpopproduct');

Auth::routes();


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


Route::get('/', function () {
    return view('welcome');
});

*/
use Illuminate\Support\Facades\Input;

Route::get('/',"PurchaseController@index");
Route::get('/edit/{id}',"PurchaseController@edit");
Route::get('/show/{id}',"PurchaseController@show");
Route::get('/create',"PurchaseController@create");
Route::post('/store',"PurchaseController@store");
Route::post('/update/{id}',"PurchaseController@update");
Route::get('/login',"LoginController@index");
Route::get('/success',"LoginController@success");
Route::get('/deco',"LoginController@deco");
Route::post('/connect',"LoginController@connect");
Route::get('/destroy/{id}',"PurchaseController@destroy");
Route::get('/show/{categorie}',"PurchaseController@show");

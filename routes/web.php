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
// Route::get('/gritar', function() {
//     return 'Gritar!!!';
// });
// Route::get('/gritar/{numero}', function($numero) {
//     $conts  = str_repeat('a',$numero);
//     return "Grit{$conts}r!!!";
// }) ;
Route::get('/gritar','GritarController@gritar');
Route::get('/gritar/{numero}','GritarController@gritarMultiplo');
Route::resource('categorias','CategoriaController');
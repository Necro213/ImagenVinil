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

Route::get('/',[
    'uses' => 'ClientesController@index',
    'as' => 'cliente.index'
]);

Route::get('/services',[
    'uses' => 'ClientesController@services',
    'as' => 'cliente.services'
]);

Route::get('/elements',[
    'uses' => 'ClientesController@elements',
    'as' => 'cliente.elements'
]);

Route::get('/contact',[
    'uses' => 'ClientesController@contact',
    'as' => 'cliente.contact'
]);

Route::get('/blog',[
    'uses' => 'ClientesController@blog',
    'as' => 'cliente.blog'
]);

Route::get('/about',[
    'uses' => 'ClientesController@about',
    'as' => 'cliente.about'
]);


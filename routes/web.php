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
Route::group(['middleware' => ['visitas']],function (){
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

});


Route::prefix('admin')->group(function (){
    Route::get('/login',[
        'uses' => 'AdminController@LoginView',
        'as' => 'admin.login'
    ]);

    Route::get('/users',[
        'middleware' => 'sesion',
        'uses' => 'AdminController@UsersView',
        'as' => 'admin.users'
    ]);

    Route::get('/',[
        'middleware' => 'sesion',
        'uses' => 'AdminController@IndexView',
       'as' => 'admin.index'
    ]);

    Route::get('/galeria',[
        'middleware' => 'sesion',
        'uses' => 'AdminController@GaleriaView',
        'as' => 'admin.galeria'
    ]);
    //--------------------------------------------DATA--------------------------------------------//

    Route::get('/users/get',[
       'uses' => 'AdminController@getUsers'
    ]);

    Route::get('/images/get',[
       'uses' => 'AdminController@getImages'
    ]);

    //--------------------------------------------POST--------------------------------------------//

    Route::post('/dologin',[
        'uses' => 'AdminController@doLogin'
    ]);

    Route::post('/reguser',[
       'uses' => 'AdminController@regUser'
    ]);

    Route::post('/addimage',[
       'uses' => 'AdminController@addImage'
    ]);

    Route::post('/image/visible/{id}',[
        'uses' => 'AdminController@imgVisible'
    ]);
    //--------------------------------------------DELETE-----------------------------------------//

    Route::delete('/user/delete/{apikey}',[
        'uses' => 'AdminController@deleteUser'
    ]);

    Route::delete('/image/delete/{id}',[
        'uses' => 'AdminController@deleteImg'
    ]);
});
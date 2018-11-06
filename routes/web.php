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

    Route::get('/productos',[
        'middleware' => 'sesion',
        'uses' => 'AdminController@ProductosView',
        'as' => 'admin.productos'
    ]);

     Route::get('/promociones',[
        'middleware' => 'sesion',
        'uses' => 'AdminController@PromocionesView',
        'as' => 'admin.promociones'
    ]);

     Route::get('/estaciones',[
        'middleware' => 'sesion',
        'uses' => 'AdminController@EstacionesView',
        'as' => 'admin.estaciones'
     ]);

    //--------------------------------------------DATA--------------------------------------------//

    Route::get('/users/get',[
       'uses' => 'AdminController@getUsers'
    ]);

    Route::get('/images/get',[
       'uses' => 'AdminController@getImages'
    ]);

    Route::get('/products/get',[
       'uses'=> 'AdminController@getProducts'
    ]);

    Route::get('/promotions/get',[
       'uses'=> 'AdminController@getPromotions'
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

    Route::post('/addproduct',[
       'uses' => 'AdminController@addProduct'
    ]);

    Route::post('/addpromo',[
       'uses' => 'AdminController@addPromo'
    ]);

    Route::post('/estaciones/edit',[
       'uses' => 'AdminController@editEstaciones'
    ]);
    //--------------------------------------------DELETE-----------------------------------------//

    Route::delete('/user/delete/{apikey}',[
        'uses' => 'AdminController@deleteUser'
    ]);

    Route::delete('/image/delete/{id}',[
        'uses' => 'AdminController@deleteImg'
    ]);

    Route::delete('/product/delete/{id}',[
        'uses' => 'AdminController@deleteProduct'
    ]);

    Route::delete('/promotion/delete/{id}',[
        'uses' => 'AdminController@deletePromotion'
    ]);
});
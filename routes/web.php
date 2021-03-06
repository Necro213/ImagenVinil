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

    Route::get('/gama',[
        'uses' => 'ClientesController@gama',
        'as' => 'cliente.gama'
    ]);

    Route::get('/portafolio',[
        'uses' => 'ClientesController@portafolio',
        'as' => 'cliente.portafolio'
    ]);

    Route::get('/blog',[

        'uses' => 'ClientesController@blog',
        'as' => 'cliente.blog'
    ]);

    Route::get('/acercade',[
        'uses' => 'ClientesController@about',
        'as' => 'cliente.about'
    ]);

});


Route::prefix('admin')->group(function (){
    Route::get('/login',[
        'uses' => 'AdminController@LoginView',
        'as' => 'admin.login'
    ]);

    Route::get('/logout',[
        'uses'=> 'AdminController@logout',
        'as' => 'admin.logout'
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

     Route::get('/colaboradores',[
        'middleware' => 'sesion',
        'uses' => 'AdminController@ColaboradoresView',
        'as' => 'admin.colaboradores'
     ]);

    Route::get('/general',[
        'middleware' => 'sesion',
        'uses' => 'AdminController@GeneralView',
        'as' => 'admin.general'
     ]);

    Route::get('/ventas',[
        'middleware' => 'sesion',
        'uses' => 'AdminController@VentasView',
        'as' => 'admin.ventas'
    ]);

    Route::get('/gama',[
        'middleware' => 'sesion',
        'uses' => 'AdminController@GamaView',
        'as' => 'admin.gama'
    ]);

    //--------------------------------------------DATA--------------------------------------------//

    Route::get('/users/get',[
       'uses' => 'AdminController@getUsers'
    ]);

    Route::get('/gama/get',[
       'uses' => 'AdminController@getGama'
    ]);

    Route::get('/images/get',[
       'uses' => 'AdminController@getImages'
    ]);

   Route::get('/colaboradores/get',[
       'uses' => 'AdminController@getColaboradores'
    ]);

    Route::get('/products/get',[
       'uses'=> 'AdminController@getProducts'
    ]);

    Route::get('/promotions/get',[
       'uses'=> 'AdminController@getPromotions'
    ]);

    Route::get('/visitors/get',[
       'uses'=> 'AdminController@getVisitors'
    ]);

    Route::get('/ventas/get/{id}',[
       'uses'=> 'AdminController@getVentas'
    ]);

    //--------------------------------------------POST--------------------------------------------//

    Route::post('/dologin',[
        'uses' => 'AdminController@doLogin'
    ]);

    Route::post('/reguser',[
       'uses' => 'AdminController@regUser'
    ]);

    Route::post('/regventa',[
       'uses' => 'AdminController@regVenta'
    ]);

    Route::post('/addimage',[
       'uses' => 'AdminController@addImage'
    ]);

    Route::post('/addgama',[
       'uses' => 'AdminController@addGama'
    ]);

    Route::post('/general/edit',[
       'uses' => 'AdminController@generalConfig'
    ]);

    Route::post('/addcolaborador',[
       'uses' => 'AdminController@addColaborador'
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

    Route::delete('/gama/delete/{id}',[
        'uses' => 'AdminController@deleteGama'
    ]);

    Route::delete('/colaborador/delete/{id}',[
        'uses' => 'AdminController@deleteColaborador'
    ]);

    Route::delete('/product/delete/{id}',[
        'uses' => 'AdminController@deleteProduct'
    ]);

    Route::delete('/promotion/delete/{id}',[
        'uses' => 'AdminController@deletePromotion'
    ]);
});
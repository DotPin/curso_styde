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

Route::get('/usuario','UserController@index');

Route::get('/usuario/nuevo','UserController@nuevo');

//Se añade restricción de ingreso en parámetro para diferenciar el uso de la ruta.
Route::get('/usuario/{id}','UserController@show')
    ->where('id','[0-9]+');


/*Versión de ruta sin controller
Route::get('/usuario/edit/{name}',function($name) {
    return "Se edita el usuario {$name}";
});*/
/*Versión de ruta con controller */
Route::get('/usuario/edit/{name}', 'UserController@edit');

//creación de rutas con parámetros fijos y validables.
//Route::get('/saludo/{name}/{apodo?}', 'WelcomeUserController@saludo');
Route::get('/saludo/{name}','WelcomeUserController@saludoNombre');

Route::get('/saludo/{name}/{apodo}','WelcomeUserController@saludoNombreApodo');

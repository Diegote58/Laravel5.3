<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Recibe dos parametros:
 ['prefix' => 'usuario']: /usuario/...
function():anonima en donde definen las rutas
*/
Route::group(['prefix' => 'admin'], function(){

	Route::resource('usuario','UsersController');

});

Route::get('api/users', function(){
    return Datatables::eloquent(App\User::query())->make(true);
});
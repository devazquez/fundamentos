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


//Route::get('/', function(){
//    return 'Hola desde la página de inicio';
//});


Route::get('/contacto/{var}', function(){
    //dd(request()->var);
    if(empty(request()->var))
        return 'bienvenido a la página de contacto ';
    return 'bienvenido a la página de contacto ' . request()->var;
});

Route::get('/foro', function(){
    return 'Foro de la clase';
});

//prácticas 
Route::get('/practicas', 'PracticasController@index')->name('practicas.index');
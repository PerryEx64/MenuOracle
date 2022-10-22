<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\TipoPlatillo;
use \App\Http\Livewire\TipoBebida;


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
//    return DB::insert("INSERT INTO ADMIN.tipo_platillo (nombre_tipo_platillo) VALUES ('prueba')");
});

Route::get('/datos', function () {
    return DB::insert("INSERT INTO ADMIN.TIPO_BEBIDA (NOMBRE_TIPO_BEBIDA) VALUES ('Fria')");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('visualizar',  function () {
    return view('index');
})->name('visualizar');




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route:: view('/hola','index');
//metodos para formularios : get, post, put, delete
Route:: view('/master','master');
Route:: view('/descripcion','descripcion');
Route::VIEW('/pasteles','pasteles');
Route:: view('/hamburguesas','hamburguesas');
Route:: view('/pizzas','pizzas');
Route:: view('/busqueda','busqueda');
Route:: view('/roles','roles');
Route::get('roles',[RolesController::class,'index']);
Route::get('agregar-rol',[RolesController::class,'add']);
Route:: view('/agregar-rol','agregar-rol');
Route:: view('/crear-rol','crear-rol');
Route::post('crear-rol',[RolesController::class,'create']);
Route::get('editar-rol/{id}',[RolesController:: class,'edit']); 
Route::post('actualizar-rol/{id}',[RolesController::class,'update']);
Route::get('eliminar-rol/{id}',[RolesController::class,'delete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

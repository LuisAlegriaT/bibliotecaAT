<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorViews;
use App\Http\Controllers\controllertbautores;
use App\Http\Controllers\controllertblibros;

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

Route::view('bookRegister','bookRegister');
Route::view('autores','autores');

Route::post('registerBook',[controladorViews::class,'controlBookRegister']);
Route::post('registerAutor',[controladorViews::class,'controlAutoresRegister']);


////////////////////////////////////////CRUD AUTORES////////////////////////////////////////////////////////////////
//ruta para llegar a la vista autores
Route::get('autores/create',[controllertbautores::class,'create'])->name('autores.create');
//ruta para insertar autores
Route::post('autores', [controllertbautores::class,'store'])->name('autores.store');

//Ruta para llegar a la vista consultaAutores con la consulta de todos los autores
Route::get('consultaAutores', [controllertbautores::class,'index'])->name('autoresC.index');

//Ruta para consultar un Autor por su ID
Route::get('consultaAutores/{id}/edit', [controllertbautores::class,'edit'])->name('autoresEdit.edit');

//Ruta para actualizar los autores
Route::put('consultaAutores/{id}',[controllertbautores::class, 'update'])->name('autoresUpdate.update');

//Ruta para consultar Autores por ID para el modal Eliminar
Route::get('consultaAutores/{id}/show', [controllertbautores::class,'show'])->name('autoresShow.show');

//Ruta para Eliminar Autores
Route::delete('consultaAutores/{id}', [controllertbautores::class,'destroy'])->name('autoresDelete.destroy');


////////////////////////////////////////CRUD LIBROS////////////////////////////////////////////////////////////////
//ruta para llegar a la vista bookRegister
Route::get('bookRegister/create',[controllertblibros::class,'create'])->name('bookRegister.create');
//ruta para insertar autores
Route::post('bookRegister', [controllertblibros::class,'store'])->name('bookRegister.store');

//Ruta para llegar a la vista consultaAutores con la consulta de todos los autores
Route::get('bookRegister', [controllertblibros::class,'index'])->name('bookRegister.index');

//Ruta para consultar un Autor por su ID
Route::get('consultaAutores/{id}/edit', [controllertblibros::class,'edit'])->name('autoresEdit.edit');

//Ruta para actualizar los autores
Route::put('consultaAutores/{id}',[controllertblibros::class, 'update'])->name('autoresUpdate.update');

//Ruta para consultar Autores por ID para el modal Eliminar
Route::get('consultaAutores/{id}/show', [controllertblibros::class,'show'])->name('autoresShow.show');

//Ruta para Eliminar Autores
Route::delete('consultaAutores/{id}', [controllertblibros::class,'destroy'])->name('autoresDelete.destroy');
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

//ruta para llegar a autores
Route::get('autores/create',[controllertbautores::class,'create'])->name('autores.create');

/*Store Autor*/
Route::post('autores', [controllertbautores::class,'store'])->name('autores.store');

/*Index Autor*/
Route::get('autores', [controllertbautores::class,'index'])->name('autores.index');

/*Edit Autor*/
Route::get('autores/{id}/edit', [controllertbautores::class,'edit'])->name('autores.edit');

/*Update Autor*/
Route::put('autores/{id}', [controllertbautores::class,'update'])->name('autores.update');

/*Show Autor*/
Route::get('autores/{id}/show', [controllertbautores::class,'show'])->name('autores.show');

/*Delete Autor*/
Route::delete('autores/{id}', [controllertbautores::class,'destroy'])->name('autores.destroy');

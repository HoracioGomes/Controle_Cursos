<?php

use App\Http\Controllers\CursosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/cursos', 'CursosController@index')->name('rota_lista_cursos');
Route::get('/cursos/criar', 'CursosController@create');
Route::post('/cursos/criar', 'CursosController@store')->name('rota_criar_curso');
Route::post('/cursos/remover/{id}', 'CursosController@destroy');
    
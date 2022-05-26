<?php

use App\Http\Controllers\Controleproduto;

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

Route::get('/buscar', [Controleproduto::class, 'index']);
Route::get('/buscar/adicionar', [Controleproduto::class, 'adicionar']);
Route::post('/buscar/adicionar', [Controleproduto::class, 'store']);
Route::delete('/buscar/{id}', [Controleproduto::class, 'destroy']);
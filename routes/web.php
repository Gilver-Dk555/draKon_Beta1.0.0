<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('biblioteca', function () {
    return "¡Bienvenido a la Fikiteca!";
});

Route::get('biblioteca/create', function () {
    return "Ingrese los datos para una busqueda personalizada: ";
});

Route::get('biblioteca/{seccion}', function ($seccion) {
    return "Bienvenido a nuestra seccion de: $seccion";
});
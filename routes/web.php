<?php

use App\Http\Controllers\bibliotecaController;
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

Route::get('biblioteca', [bibliotecaController::class, 'index']);

Route::get('biblioteca/create', [bibliotecaController::class, 'create']);

Route::get('biblioteca/{seccion}', [bibliotecaController::class, 'show']);
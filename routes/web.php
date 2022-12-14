<?php

use App\Http\Controllers\PaginaController;
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


Route::get('/', [PaginaController::class, 'pagina_de_caida']);

Route::get('/contactos/{registro_id?}', [PaginaController::class, 'contacts']);

Route::post('/recibe-form-contacto', [PaginaController::class, 'recibeFormContacto']);

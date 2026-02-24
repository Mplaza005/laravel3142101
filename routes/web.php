<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('sumarFrm',[OperacionesController::class,'formulario_sumar']);
Route::post('sumar',[OperacionesController::class,'sumar'])->name('suma');


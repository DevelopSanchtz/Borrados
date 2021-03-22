<?php

use App\Http\Controllers\sendEmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. TheseW
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/email', [sendEmailController::class, 'sendEmail'])->name('correo');
Route::post('/solicitar', [sendEmailController::class, 'solicitar'])->name('solicitarProducto');

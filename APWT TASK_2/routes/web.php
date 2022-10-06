<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/login', [StudentController::class,'login']);
Route::post('/login', [StudentController::class,'loginValidate']);

Route::get('/register', [StudentController::class,'register']);
Route::post('/register', [StudentController::class,'registerValidate']);

Route::get('/contact', [StudentController::class,'contact']);
Route::post('/contact', [StudentController::class,'contactValidate']);

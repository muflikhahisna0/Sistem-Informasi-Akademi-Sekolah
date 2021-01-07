<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PagesController;
use App\HTTP\Controllers\TeachersController;
use App\HTTP\Controllers\StudentsController;

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

// Route::get('/', function () {
//     return view('index');
// });



Route::get('/', [PagesController::class, 'home']);
Route::get('/teacher', [TeachersController::class, 'index']);
Route::get('/teacher/create', [TeachersController::class, 'create']);
Route::post('/teacher', [TeachersController::class, 'store']);
Route::delete('/{teacher}', [TeachersController::class, 'destroy']);
Route::get('/{teacher}/edit', [TeachersController::class, 'edit']);
Route::patch('/teacher/{teacher}', [TeachersController::class, 'update']);

Route::get('/student', [StudentsController::class, 'index']);
Route::get('/student/create', [StudentsController::class, 'create']);
Route::post('/student', [StudentsController::class, 'store']);
Route::delete('/{student}', [StudentsController::class, 'destroy']);
Route::get('/{student}/edit', [StudentsController::class, 'edit']);
Route::patch('/student/{student}', [StudentsController::class, 'update']);

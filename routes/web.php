<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [StudentController::class, "create"]);
Route::post('/register', [StudentController::class, "store"]);

Route::get('/admin/login', [AdminController::class, "index"]);
Route::post('/admin/login', [AdminController::class, "store"]);
Route::post('/admin/logout', [AdminController::class, "destroy"])->middleware("auth");

Route::get('/admin/students', [StudentController::class, "index"])->middleware("admin");
Route::get('/admin/students/{student}', [StudentController::class, "edit"])->middleware("admin");
Route::patch('/admin/students/{student}', [StudentController::class, "update"])->middleware("admin");
Route::delete('/admin/students/{student}', [StudentController::class, "destroy"])->middleware("admin");


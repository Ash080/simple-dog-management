<?php

use App\Http\Controllers\DogsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// user routes
Route::get("/login", [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);

// dog routes
Route::get('/', [DogsController::class, 'index'])->middleware('auth');
Route::get('/dog', [DogsController::class, 'create']);
Route::post('/dog/create', [DogsController::class, 'store']);
Route::delete('/dog/{id}', [DogsController::class, 'destroy']);
Route::put('/dog/{id}', [DogsController::class, 'update']);
Route::get('/dog/{id}/edit', [DogsController::class, 'edit']);

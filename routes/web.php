<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\TagsController;

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

Route::get('/', [ItemsController::class, 'index']);

Route::get('/items/create', [ItemsController::class, 'create'])->middleware('auth');
Route::post('/items/create', [ItemsController::class, 'store'])->middleware('auth');
Route::get('/items/{item}', [ItemsController::class, 'show'])->name('items.show')->middleware('auth');

Route::get('/tags/create', [TagsController::class, 'create'])->middleware('auth');
Route::post('/tags/create', [TagsController::class, 'store'])->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [AuthController::class, 'getRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'getLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

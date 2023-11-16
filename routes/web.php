<?php

use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TransactionalController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/register', [UserController::class, 'registerPage']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/transaction', [TransactionalController::class, 'index']);
Route::post('/transaction', [TransactionalController::class, 'transaction'])->middleware('auth');

Route::get('/product', [VehicleController::class, 'index']);
Route::get('/product/{id}', [VehicleController::class, 'show']);
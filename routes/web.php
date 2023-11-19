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

Route::get("page", function () {
    return view("page");
});

Route::get("/", [VehicleController::class, 'index']);

Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/product', [VehicleController::class, 'index']);
Route::get('/product/{id}', [VehicleController::class, 'show']);

Route::get('/transaction', [TransactionalController::class, 'index']);
Route::post('/transaction', [TransactionalController::class, 'transaction'])->middleware('auth');

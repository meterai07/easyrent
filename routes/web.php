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


Route::get("/", [VehicleController::class, 'index']);

Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/user/profile', [UserController::class, 'profile'])->middleware('auth');

Route::prefix('product')->group(function () {
    Route::get('/', [VehicleController::class, 'index'])->name('product');
    Route::get('/{id}', [VehicleController::class, 'show']);
    Route::get('/{id}/transaction', [TransactionalController::class, 'showTransaction'])->middleware('auth');
    Route::post('/transaction', [TransactionalController::class, 'transaction'])->middleware('auth');
    Route::get('{id}/transaction/invoice', [TransactionalController::class, 'showInvoice']);
});

// Route::post('/save-transaction', [TransactionalController::class, 'store'])->name('save.transaction');

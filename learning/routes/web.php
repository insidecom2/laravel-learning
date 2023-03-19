<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [AuthController::class, 'loginPage'])->name('Login Page');
Route::get('/login', [AuthController::class, 'loginPage'])->name('Login Page');

Route::prefix('/user')->group(function () {
    Route::get('/list', [UserController::class, 'list'])->name('User Lists');
});

Route::prefix('/auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('User Login');
});

<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['jwt.verify','permission'])->get('/users', [UserController::class, 'index']);

Route::middleware(['jwt.verify','permission'])->post('/users/create', [UserController::class, 'store']);

Route::middleware(['jwt.verify','permission'])->post('/users/edit', [UserController::class, 'update']);

Route::middleware(['jwt.verify','permission'])->delete('/users/delete/{id}', [UserController::class, 'destroy']);


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', 'App\Http\Controllers\AuthController\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController\AuthController@me');
    Route::post('register', [AuthController::class, 'register']);
});

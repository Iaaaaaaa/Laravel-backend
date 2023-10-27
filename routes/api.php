<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CarouselItemsController;
use App\Http\Controllers\Api\PromptController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

    Route::controller(CarouselItemsController::class)->group(function () {
        Route::get('/carousel',             'index');
        Route::get('/carousel/{id}',        'show');
        Route::post('/carousel',            'store');
        Route::put('/carousel/{id}',        'update');
        Route::delete('/carousel/{id}',     'destroy');
    });


    Route::controller(UserController::class)->group(function () {
        Route::get('/user',                 'index');
        Route::get('/user/{id}',            'show');
        Route::put('/user/{id}',        'update')->name('user.update');
        Route::put('/user/email/{id}',        'email')->name('user.email');
        Route::put('/user/password/{id}',        'password')->name('user.password');
        Route::delete('/user/{id}',     'destroy');
        Route::post('/user',            'store')->name('user.store');
      
    });

    Route::controller(PromptController::class)->group(function () {
        Route::get('/prompt',                 'index');
        Route::get('/prompt/{id}',            'show');
        Route::put('/prompt/{id}',        'update');
        Route::delete('/prompt/{id}',     'destroy');
        Route::post('/prompt',            'store');
      
    });

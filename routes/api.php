<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CarouselItemsController;

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
        Route::delete('/user/{id}',     'destroy');
        Route::post('/user',            'store');
      
    });

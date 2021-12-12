<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Admin panel API

Route::middleware('api_auth')->group(function (){

    Route::prefix('panel')->group(function (){

        Route::prefix('categories')->group(function (){
            Route::post('store',[\App\Http\Controllers\Api\CategoryController::class,'store'])->name('api_panel_category_store');
        });
    });

});

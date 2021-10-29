<?php

use Illuminate\Support\Facades\Route;

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

//Auth Routing
require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/

//index
Route::get('',[\App\Http\Controllers\Front\PageController::class,'index'])->name('front_index');


/*
|--------------------------------------------------------------------------
| Panel Routes
|--------------------------------------------------------------------------
*/

Route::prefix('panel')->group(function (){

    Route::get('',[\App\Http\Controllers\Panel\DashboardController::class,'index'])->name('panel_dashboard');

    //Categories
    Route::prefix('categories')->group(function (){

        Route::get('',[\App\Http\Controllers\Panel\CategoryController::class,'index'])->name('panel_categories');

    });

});

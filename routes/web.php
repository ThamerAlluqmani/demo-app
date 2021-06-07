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


Auth::routes();


Route::group(
    ['middleware' => ['auth'],
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']

    ], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('throttle:userHomeLimit')->name('home');

    Route::resource('products', \App\Http\Controllers\ProductController::class);
    Route::resource('language', \App\Http\Controllers\LanguageController::class);

});



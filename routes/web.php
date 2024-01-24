<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','Frontend\FrontendController@index')->name('home');

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/about', 'FrontendController@aboutPage')->name('about');
    Route::get('/contact', 'FrontendController@contactPage')->name('contact');

    Route::prefix('market')->group(function () {
        Route::get('/', 'MarketController@index')->name('market');
        Route::get('/detail/{slug}', 'MarketController@detail_product')->name('market.detail');
    });
});

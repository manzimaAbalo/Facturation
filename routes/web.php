<?php

use App\Http\Controllers\ProfileController;
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
    Route::get('/account-profile', 'FrontendController@profilePage')->name('user-profile');

    Route::prefix('market')->group(function () {
        Route::get('/', 'MarketController@index')->name('market');
        Route::get('/detail/product/{slug}', 'MarketController@detail_product')->name('market.detail');
        Route::get('/panier', 'CartController@cartPage')->name('market.cart');
        Route::get('/commandes', 'MarketController@checkoutPage')->name('market.checkout');
        Route::get('/favoris', 'MarketController@favorisPage')->name('market.favoris');
    });

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

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

Route::get('/', function () {
    return view('product');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/checkout/stripe', 'CheckoutController@stripe')->name('stripe');
Route::get('/checkout/stripepayment', 'CheckoutController@stripePayment')->name('stripepayment');
Route::get('/about', 'HomeController@about');
Route::get('/category', 'HomeController@category');
Route::get('/detail/{id}', 'DetailController@detail')->name('detail');

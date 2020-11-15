<?php

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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('cart', 'CartController');

Route::get('stripe', 'StripePaymentController@stripe')->name('stripe.index');
Route::get('paypal', 'StripePaymentController@paypal')->name('stripe.paypal');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
Route::get('handle-payment', 'PayPalPaymentController@handlePayment')->name('make.payment');
Route::get('cancel-payment', 'PayPalPaymentController@paymentCancel')->name('cancel.payment');
Route::get('payment-success', 'PayPalPaymentController@paymentSuccess')->name('success.payment');

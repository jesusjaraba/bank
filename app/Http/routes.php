<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layout/layout');
});
Route::get('bank/show/{id}', ['uses' => 'ControllerBank@show', 'as' => 'bank.show']);
Route::resource('bank','controllerBank');


Route::resource('account','ControllerAccount');

Route::get('customer/show/{id}', ['uses' => 'ControllerCustomer@show', 'as' => 'customer.show']);
Route::get('viewCustomer/{id}', ['uses' => 'ControllerCustomer@viewCustomer', 'as' => 'viewCustomer']);
Route::resource('customer','ControllerCustomer');


Route::get('viewInfo/{id}', ['uses' => 'ControllerDebitCard@viewInfo', 'as' => 'viewInfo']);
Route::resource('card','ControllerDebitCard');



Route::get('transaction/client/{numberCard}', ['uses' => 'ControllerTransaction@viewTransaction', 'as' => 'transaction.client']);
Route::resource('transaction','ControllerTransaction');
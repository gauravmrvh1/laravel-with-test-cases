<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'About Page';
});

Route::post('/user', function () {
    return response([
        'created' => true
    ], 201);
});

Route::get('product', 'ProductController@index')->name('product.index');

Route::get('product/create', 'ProductController@create')
    ->middleware('auth')
    ->name('product.create');

Route::post('product/store', 'ProductController@store')
    ->middleware('auth')
    ->name('product.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

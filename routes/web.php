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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products','ProductController@index');


Route::get('/products/{product}','ProductController@show')->name('product');

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/admin/add_item', function () {
    return view('add_item');
});

Route::get('/admin/items','ProductController@showAll');

Route::get('/admin/users','UsersController@showAll');

Route::get('/admin/items/delete/{id}','ProductController@delete');

Route::post('/admin/add_item/post','ProductController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

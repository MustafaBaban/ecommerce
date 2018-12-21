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
})->name('welcome');
// Route::get('/products','ProductController@index');

// Route::get('/products','ProductController@index');

Route::get('/products','ProductController@filter')->name('products');

Route::get('/product/{product}','ProductController@show')->name('product');

Route::get('/product/like','ProductController@show')->name('product');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin','AdminController@index')->name('admin');

Route::get('/admin/add_item','AdminController@add_item');

Route::get('/admin/items','AdminController@showProducts');

Route::get('/admin/users','AdminController@showUsers');

Route::get('/admin/items/delete/{id}','AdminController@delete');

Route::post('/admin/add_item/post','AdminController@store');

Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return redirect('home');
});

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('locale/{locale}', function($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

// productos y servicios
Route::get('/catalog', 'HomeController@catalog')->name('catalog');
Route::get('/product1', 'HomeController@product1')->name('product1');
Route::get('/product2', 'HomeController@product2')->name('product2');
Route::get('/product3', 'HomeController@product3')->name('product3');
Route::get('/product4', 'HomeController@product4')->name('product4');

// formularios
Route::post('/contactForm', 'HomeController@contactForm')->name('contactForm');
// avisos legales

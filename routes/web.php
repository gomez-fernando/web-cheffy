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
Route::get('/products/catalog', 'HomeController@catalog')->name('products.catalog');
Route::get('/products/product1', 'HomeController@product1')->name('products.product1');
Route::get('/products/product2', 'HomeController@product2')->name('products.product2');
Route::get('/products/product3', 'HomeController@product3')->name('products.product3');
Route::get('/products/product4', 'HomeController@product4')->name('products.product4');

// formularios
Route::post('/contactForm', 'HomeController@contactForm')->name('contactForm');

// sobre nosotros
Route::get('/about-us', 'HomeController@aboutUs')->name('aboutUs.aboutUs');
Route::get('/join-us', 'HomeController@workWithUs')->name('aboutUs.workWithUs');
Route::get('/invest-in-Cheffy', 'HomeController@invest')->name('aboutUs.invest');

// avisos legales
Route::get('/general-conditions', 'HomeController@generalConditions')->name('importantInfo.generalConditions');
Route::get('/privacy-policy', 'HomeController@privacyPolicy')->name('importantInfo.privacyPolicy');
Route::get('/frequent-questions', 'HomeController@frequentQuestions')->name('importantInfo.frequentQuestions');
Route::get('/cookies-policy', 'HomeController@cookiesPolicy')->name('importantInfo.cookiesPolicy');
Route::get('/customer-service', 'HomeController@customerService')->name('importantInfo.customerService');

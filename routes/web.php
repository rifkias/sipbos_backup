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

Route::get('/','IndexController@index')->name('MainPage');
Route::get('/about-us','IndexController@about')->name('AboutUs');
Route::get('/produk/{type}/{detail}','IndexController@produkDetail')->name('ProdukDetail');
Route::get('/produk/{type}','IndexController@produkType')->name('ProdukType');
Route::get('/produk','IndexController@produk')->name('Produk');

Route::get('/test',function(){
    return view('layouts.admin');
});
Route::group(['prefix' => 'adminsipbos'], function () {

    Auth::routes();
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('website/banner', 'BannerController@index')->name('banner');
    Route::get('website/banner/detail/{id}', 'BannerController@show')->name('bannerDetail');
    Route::post('website/banner/edit', 'BannerController@edit')->name('bannerEdit');
    Route::post('website/banner/add', 'BannerController@store')->name('bannerAdd');
    Route::post('website/banner/delete', 'BannerController@destroy')->name('bannerDelete');
    Route::post('website/banner/active', 'BannerController@active')->name('bannerActive');

});
<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', 'Website\WebsiteController@index')->name('index');

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('admin/home', 'HomeController@adminHome')
//    ->name('admin.home')->middleware('is_admin');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'Admin\DashboardController@index')->name('home');

});
Route::group(['middleware' => 'is_admin'], function () {
    Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');
});

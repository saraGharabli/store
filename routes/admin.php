<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
define('PAGINATION_COUNT', 10);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::group(['namespace'=>'App\Http\Controllers\Dashboard', 'middleware'=>'auth:admin', 'prefix'=>'admin'], function() {
        Route::get('/', 'DashboardController@index')->name('admin.dashboard');
        Route::get('logout', 'LoginController@logout')->name('admin.logout');


        Route::group(['prefix'=> 'settings'], function() {
            Route::get('shipping-methods/{type}', 'SettingController@editShippingMethods')->name('edit.shipping.methods');
            Route::put('shipping-methods/{id}', 'SettingController@updateShippingMethods')->name('update.shipping.methods');
        });
    });

    Route::group(['namespace'=>'App\Http\Controllers\Dashboard', 'middleware'=>'guest:admin', 'prefix'=>'admin'], function(){
        Route::get('login', 'LoginController@getLogin')->name('get.admin.login');
        Route::post('login', 'LoginController@login')->name('admin.login');
    });

});






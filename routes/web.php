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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::prefix('admin')->group(function () {
    Route::get('/', [
    	'uses'	=>	'AdminController@index',
    	'as'	=>	'admin.index'
    ]);

    Route::get('setting', [
        'uses'  =>  'AdminController@settingindex',
        'as'    =>  'admin.setting.index'
    ]);

    Route::post('setting', [
        'uses'  =>  'AdminController@settingpost',
        'as'    =>  'admin.setting.post'
    ]);

    Route::get('product', [
    	'uses'	=>	'AdminController@productindex',
    	'as'	=>	'admin.product.index'
    ]);

    Route::get('product/create', [
    	'uses'	=>	'AdminController@productcreate',
    	'as'	=>	'admin.product.create'
    ]);
});
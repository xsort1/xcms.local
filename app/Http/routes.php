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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [
        'as'    => 'index',
        'uses'  => 'HomeController@index'
    ]);

    Route::get('news/{slug}', [
        'as'    => 'get-news',
        'uses'  => 'HomeController@getNews'
    ]);
});

Route::get('admin/login', function(){
    return view('admin.login');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('admin', [
        'as'    => 'admin-index',
        'uses'  => 'Admin\AdminController@index'
    ]);
});
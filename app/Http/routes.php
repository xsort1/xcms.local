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

//
//admin panel
//
Route::get('admin/login', [
    'uses'          => 'Admin\AdminController@getLogin',
    'middleware'    => ['web']
]);

Route::post('admin/login',["uses" => 'Admin\AdminController@postLogin',
            'middleware'    => ['web']]);

Route::group(['middleware' => ['admin', 'web']], function () {
    Route::get('admin', [
        'as'    => 'admin-index',
        'uses'  => 'Admin\AdminController@index'
    ]);
});

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminUserController@index')->name('test');
Route::get('/pro', 'ProUserController@index')->name('pro');

Route::get('/feed/{param}', 'FeedController@index')->name('feed');
Route::get('/profil/user/{id}', 'FocusOnUserController@profilUser')->name('focus_user');




// Super Admin
Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware' => 'isAdminLogged'
    ], 
    function () {
        Route::get('/admin/home', 'AdminHomeController@index')->name('home');
    }
);
Auth::routes();

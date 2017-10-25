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

Route::get('/feed/{type}', 'FeedController@index')->name('feed');
Route::get('/profil/user/{id}', 'FocusOnUserController@profilUser')->name('focus_user');
Route::get('/event/{id}', 'FeedController@focusEvent')->name('focus_event');

Route::get('/map', 'MapController@index')->name('map');


// user action
Route::get('/follow/this/user/{id}/{type?}', 'UserActionController@followUser')->name('follow_this_user');
Route::get('/like/event/{id}/{type?}', 'UserActionController@likeEvent')->name('like_this_event');

Route::get('/unlock/achievement/curiosity', 'UserActionController@unlockCuriosity');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/edtit/profil/', 'Auth\EditProfilController@index')->name('auth.edit_profil');
});

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

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
Route::get('/game/{id}', 'FeedController@focusGame')->name('focus_game');

Route::get('/map', 'MapController@index')->name('map');

Route::get('/become/pro/user', 'ProAccountController@index')->name('become.pro');

// user action
Route::get('/follow/this/user/{id}/{type?}', 'UserActionController@followUser')->name('follow_this_user');
Route::get('/like/event/{id}/{type?}', 'UserActionController@likeEvent')->name('like_this_event');

Route::get('/unlock/achievement/curiosity', 'UserActionController@unlockCuriosity');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/edtit/profil/', 'Auth\EditProfilController@index')->name('auth.edit_profil');
});

Route::group(['middleware' => 'isPro'], function () {
    Route::get('/add/jeu/', 'Pro\GameController@addGame')->name('pro.add_game');
    Route::post('/add/jeu/post', 'Pro\GameController@postAddGame')->name('pro.post_game');

    Route::get('/add/event/', 'Pro\EventController@addEvent')->name('pro.add_event');
    Route::post('/add/event/post', 'Pro\EventController@postAddEvent')->name('pro.post_event');
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

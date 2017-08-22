<?php

    /*
    --------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/', 'LogToAdminController@postSignIn')->name('signToAdmin');

    Route::group(
        [
            'as' => 'admin.',
            'prefix' => 'admin',
            'namespave' => 'Admin',
            'middleware' => 'is-admin'
        ], function () {
            Route::get('/admin/ajouter/un/jeu', 'AddGameAdminController@addGame')->name('addGame');
        }
    );

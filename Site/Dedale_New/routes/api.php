<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/user', function (Request $req) {
        return $req->user();
})->middleware('auth:api');

Route::get('/test', function() {
        return response()->json([
            'user' => [
            'first_name' => 'Renato',
            'last_name' => 'coucou'
        ]
    ]);
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('games', 'GamesController');
});
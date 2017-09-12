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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Achievements endpoint
Route::get('achievements', 'AchievementsController@get_all');
Route::get('achievements/{achievement}', 'AchievementsController@get');
Route::get('achievements/earned/{player}', 'AchievementsController@get_earned_achievement');


//Posts endpoint
Route::get('posts/{page}', 'PostsController@get');
Route::get('posts/comments/{post}', 'PostsController@get_comments');

Route::post('post', 'PostsController@create');
Route::delete('post/{post}', 'PostsController@remove');


//Games endpoint
Route::get('games/{page}', 'GamesController@get');
Route::get('games/{cat}/{page}', 'GamesController@get_category');

//This command return all the info of one game
Route::get('games/display/{game}', 'GamesController@get_game');

//Players endpoint

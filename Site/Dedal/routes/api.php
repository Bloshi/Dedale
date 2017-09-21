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
Route::get('posts/{page}', 'API\PostsController@get');
Route::get('posts/comments/{post}', 'API\PostsController@get_comments');

Route::post('post', 'API\PostsController@create');
Route::delete('post/{post}', 'API\PostsController@remove');


//Games endpoint
Route::get('games/{page}', 'API\GamesController@get');
Route::get('games/{cat}/{page}', 'API\GamesController@get_category');

//This command return all the info of one game
Route::get('games/display/{game}', 'API\GamesController@get_game');

//Players endpoint

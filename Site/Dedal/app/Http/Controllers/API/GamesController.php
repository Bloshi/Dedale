<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Categories;
use App\Models\Grade;
use Illuminate\Http\Request;

/**
*  API Endpoint for Posts
*/
class GamesController extends Controller
{
	//Return 20 games per page.
	public function get($page){
		return response()->json($page, 501);
	}

	public function get_category(Categories $cat, $page){
		return response()->json($page, 501);
	}

	public function get_game(Games $game){
		return response()->json($page, 501);
	}
}


<?php

namespace App\Http\Controllers\API;

use App\Models\Games;
use App\Models\Categories;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
*  API Endpoint for Posts
*/
class GamesController extends Controller
{
	//Return 20 games per page.
	public function get($page){
		$test = array();
		$test['nom'] = "Fink";
		$test['prenom'] = "Jérôme";
		$test['email'] = "jeromefink@hotmail.com";
		$test['page'] = $page;

		return response()->json($test, 501);
	}

	public function get_category(Categories $cat, $page){
		return response()->json($page, 501);
	}

	public function get_game(Games $game){
		return response()->json($page, 501);
	}
}


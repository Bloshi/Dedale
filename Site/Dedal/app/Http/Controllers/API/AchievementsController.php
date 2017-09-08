<?php

namespace App\Http\Controllers;

use App\Models\Achievements;
use Illuminate\Http\Request;

/**
*  API Endpoint for Achievments
*/
class AchievementsController extends Controller
{
	
	public function get_all(){
		return response()->json(Achievements::all(), 200);
	}

	public function get(Achievements $achievement){

		if($achievement){
			return response()->json($achievement, 200);
		}
		else{
			//Not found
			return response()->json("", 404);
		}
	}

}


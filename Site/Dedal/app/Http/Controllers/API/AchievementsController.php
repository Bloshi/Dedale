<?php

namespace App\Http\Controllers\API;

use App\Models\Achievements;
use App\Models\Players;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

	public function get_earned_achievement(Playsers $player){
		return response()->json("not implemented yet", 501);
	}

}


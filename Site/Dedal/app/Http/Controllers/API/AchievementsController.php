<?php

namespace App\Http\Controllers;
use App\Models\Achievements;

/**
*  API Endpoint for Achievments
*/
class AchievementsController extends Controller
{
	
	public function get_all(){
		return response()->json(Achievements::all(), 200);
	}
}


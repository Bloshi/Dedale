<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

/**
*  API Endpoint for Posts
*/
class PostsController extends Controller
{
	//Return 20 post per page.
	public function get($page){
		return response()->json($page, 501);
	}

	//Add a post
	public function create(Request $request){
		return response()->json("not implemented yet", 501);
	}

	//Delete a post
	public function remove(Posts $post){
		return response()->json("not implemented yet", 501);
	}

}


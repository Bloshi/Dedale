<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Http\Support\Facades\Auth;

    class CommentController extends Controller
    {
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('auth');
        }
        
        public function store(Request $req)
        {
            $user = Auth::user();
            $user->comments()->create($req->only('content'));
            return redirect()->back();
        }
    }

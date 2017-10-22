<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Models\Games;

    class FeedController extends Controller
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

        public function index($param)
        {
            $data = [];

            if ($param === 'game') {
                $data['games'] = Games::all();
            } else {
                $data['events'] = Games::all();
            }

            return view('feed/feed', $data);
        }
    }
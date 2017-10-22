<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

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
                $data['game'] = Games::all();
            } else {
                $data['event'] = Games::all();
            }

            return view('feed/feed', $data);
        }
    }

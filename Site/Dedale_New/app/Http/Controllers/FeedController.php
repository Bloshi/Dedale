<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Models\Games;
    use App\Models\Events;

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

        public function index($type)
        {
            $data = [ 'whatFeed' => $type ];
            if ($type === 'game') {
                $data['games'] = Games::orderBy('created_at', 'DESC')->get();
            } elseif ($type === 'event') {
                $data['events'] = Events::orderBy('created_at', 'DESC')->get();
            }
            return view('feed/feed', $data);
        }

        // focus
        public function focusEvent($id)
        {
            $data = [];
            return view('feed/focus_event', $data);
        }
        public function focusGame($id)
        {
            $data = [];
            return view('feed/focus_game', $data);
        }
    }

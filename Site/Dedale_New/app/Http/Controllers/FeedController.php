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
            $data = [
                'whatFeed' => $type
            ];

            if ($type === 'game') {
                $data['games'] = Games::orderBy('created_at')->get();
            } elseif ($type === 'event') {
                $data['events'] = Events::orderBy('created_at')->get();
            }

            return view('feed/feed', $data);
        }
    }

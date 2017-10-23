<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Models\User;
    use App\Models\Games;
    use App\Models\Events;

    class FocusOnUserController extends Controller
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

        public function profilUser($id)
        {
            $games = Games::where('user_id', $id)->take(3)->get();
            if (count($games) == 0) { $games = NULL; }

            $events = Events::where('user_id', $id)->take(3)->get();
            if (count($events) == 0) { $events = NULL; }

            $data = [
                'user' => User::findOrFail($id),
                'games' => $games,
                'events' => $events
            ];
            return view('user/profil', $data);
        }
    }

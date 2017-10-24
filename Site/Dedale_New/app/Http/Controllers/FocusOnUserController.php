<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use Auth;
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

            // check if Auth::user() follow this user
            if ( Auth::user()->isFollowing($id) ) {
                $isFollowing = true;
            } else {
                $isFollowing = false;
            }
            // if Auth user page
            $isAuthUserPage = $id == Auth::user()->id ? true : false;

            $howManyFollowers = count(User::findOrFail($id)->followings()->get());

            $data = [
                'user' => User::findOrFail($id),
                'games' => $games,
                'events' => $events,
                'isFollowing' => $isFollowing,
                'howManyFollowers' => $howManyFollowers,
                'isAuthUserPage' => $isAuthUserPage,
                'followers' => User::findOrFail($id)->followings()->get()
            ];
            return view('user/profil', $data);
        }
    }

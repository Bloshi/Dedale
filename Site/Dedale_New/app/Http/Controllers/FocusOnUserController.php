<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Models\User;
    use App\Models\Games;

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
            $data = [
                'user' => User::findOrFail($id),
                'games' => Games::where('user_id', $id)->get()
            ];
            return view('user/profil', $data);
        }
    }

<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Models\Games;
    use Auth;

    class HomeController extends Controller
    {
        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $data = [];
            return view('home/home', $data);
        }
    }

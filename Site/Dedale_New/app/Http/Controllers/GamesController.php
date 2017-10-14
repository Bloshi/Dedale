<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Games;

    class GamesController extends Controller
    {
        public function index()
        {
            return Games::all();
        }
    }

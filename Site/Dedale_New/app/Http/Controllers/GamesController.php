<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Games;

    class GamesController extends Controller
    {
        public function index()
        {
            return Games::orderBy('created_at', 'desc')->get();
        }

        public function store(Request $req)
        {
            $game = Games::create($req->all());
            return $game;
        }

        public function destroy($id)
        {
            try {
                Games::destroy($id);
                return response([], 204);
            } catch (\Exeption $e) {
                return response(['Problème suppression jeu', 500]);
            }
        }
    }

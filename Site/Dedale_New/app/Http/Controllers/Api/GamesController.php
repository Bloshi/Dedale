<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Games;
    use Auth;

    class GamesController extends Controller
    {
        public function index()
        {
            return Games::orderBy('created_at', 'desc')->get();
        }

        public function store(Request $req)
        {
            // traitement de l'image
            $exploded = explode(',', $req->image);
            $decoded = base64_decode($exploded[1]);

            if (str_contains($exploded[0], 'jpeg')) {
                $ext = 'jpg';
            } else {
                $ext = 'png';
            }
            $fileName = str_random().'.'. $ext;
            $path = public_path().'/images/games/'.$fileName;
            file_put_contents($path, $decoded);

            // incrémentation dans la base de donnée
            $game = Games::create( $req->except('image') + 
                [
                    'user_id' => Auth::id(),
                    'image' => $fileName
                ]
            );
            return $game;
        }

        public function show($id)
        {
            $game = Games::find($id);
            
            if (count($game) > 0) {
                return response()->json($game);
            }
                
            return response()->json(['error' => 'Resource not found!'], 404);
        }

        public function update(Request $req, $id)
        {
            $game = Games::findOrFail($id);
            $game->update($req->all());
            return response()->json($game);
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

<?php

    namespace App\Http\Controllers\Pro;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Input;

    use App\Cls\Proper;

    use App\Models\Games;
    use App\Models\Gameimg;
    use App\Models\Events;
    use Auth;

    class GameController extends Controller
    {
        public function addGame() 
        {
            return view('adding/add_game');
        }
        public function postAddGame(Request $req) 
        {
            $game = new Games;
            $game->name = $req->name;
            $game->user_id = Auth::user()->id;
            $game->description = $req->description;
            $game->note = $req->note;
            $game->save();

            $idMax = Games::max('id');
            
            if (Input::hasFile('images')) {
                $uploadFile = Input::file('images');
                $cnt = 0;
                foreach ($uploadFile as $file) {
                    $ext = $file->getClientOriginalExtension();
                    $basename = basename($file->getClientOriginalName(), $ext);
                    $basename = Proper::ProperFileName($basename);
                    $name = $idMax.'-'.time().'-'.$cnt.'-'.$basename.$ext;
                    $file->move(public_path('images/games'), $name);

                    $alt = $req->name.' | '. $cnt .' | Jeux | PlayPal';

                    $newImg = new Gameimg;
                    $newImg->url = $name;
                    $newImg->alt = $alt;
                    $newImg->games_id = $idMax;
                    $newImg->save();

                    $cnt++;
                }
            }

            flash('Le jeu a bien été ajouté.')->success();
            return redirect()->route('feed', ['type' => 'game']);
        }
        public function editGame() 
        {
        // 
        }
        public function deleteGame() 
        {
            //
        }
    }

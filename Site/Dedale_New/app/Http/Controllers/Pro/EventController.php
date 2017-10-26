<?php

    namespace App\Http\Controllers\Pro;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Input;

    use App\Cls\Proper;

    use App\Models\Events;
    use App\Models\Games;
    use Auth;

    class EventController extends Controller
    {
        public function addEvent() 
        {
            $id = Auth::user()->id;
            $data['gameCreatedByUser'] = Games::where('user_id', $id )->get();

            return view('adding/add_event', $data);
        }
        public function postAddEvent(Request $req)
        {
            if (Input::hasFile('image')) {
                $file = $req->image;
                $ext = $file->getClientOriginalExtension();
                $basename = basename($file->getClientOriginalName(), $ext);
                $fileName = str_random().'.'. $ext;
                $file->move(public_path('/images/events/'), $fileName);
            } else {
                $fileName = null;
            }
            
            $event = new Events;
            $event->creator_id = Auth::user()->id;
            $event->title = $req->title;
            $event->image = $fileName;
            $event->description = $req->description;
            $event->date_start = $req->date_start;
            $event->date_end = $req->date_end;
            $event->place = $req->place;
            $event->game_id = $req->game_id;
            $event->public = $req->public === 'on' ? 1 : 0;
            $event->organisation = str_random();
            $event->save();

            flash('Votre événement a bien été ajouté.')->success();
            return redirect()->route('feed', ['type' => 'event']);
        }
        public function editEvent() 
        {
        // 
        }
        public function deleteEvent() 
        {

        }
    }

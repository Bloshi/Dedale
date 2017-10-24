<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use Overtrue\LaravelFollow\Traits\CanFollow;
    use Overtrue\LaravelFollow\Traits\CanLike;

    use App\Achievements\Curiosity;

    use App\Models\User;
    use App\Models\Events;
    use Auth;

    class UserActionController extends Controller
    {           
        public function followUser($id, $type = 'add') 
        {
            $AuthUser = Auth::user();
            $toFollowUser = User::findOrFail($id);

            if ( $type === 'add' ) {
                $AuthUser->follow( $toFollowUser );
                $messageAlert = 'Vous suivez maintenant';
            } elseif ($type === 'cancel') {
                $AuthUser->unfollow( $toFollowUser );
                $messageAlert = 'vous ne suivez désormais plus';
            }

            flash('<p>'. $messageAlert .' <b>'. $toFollowUser->firstName .' '. $toFollowUser->lastName .'</b>.</p>')->success();
            return redirect()->back();
        }

        public function likeEvent($id, $type = 'like')
        {
            $AuthUser = Auth::user();
            $event = Events::findOrFail($id);

            if ( $type === 'like' ) {
                $AuthUser->like( $event ); 
            } elseif ( $type === 'unlike' ) {
                $AuthUser->unlike( $event );
            }
            return redirect()->back();
        }

        /**
         * Badges / Acievements zone
         * usong gstt/laravel-achievements
         * https://packagist.org/packages/gstt/laravel-achievements
         * 
         * all Achievements App\Achievements
         */
        public function unlockCuriosity()
        {
            Auth::user()->unlock(new Curiosity());

            flash('<p>Vous avez dibloqué le badge "Curiosity" !</p>')->success();
            return redirect()->back();
        }
    }

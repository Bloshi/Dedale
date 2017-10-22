<?php

    namespace App\Models; 

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Laravel\Passport\HasApiTokens;

    // overtrue/laravel-follow package - https://github.com/overtrue/laravel-follow
    use Overtrue\LaravelFollow\Traits\CanFollow;
    use Overtrue\LaravelFollow\Traits\CanBeFollowed;

    // gstt/laravel-achievements package - https://packagist.org/packages/gstt/laravel-achievements
    use Gstt\Achievements\Achiever;

    use App\Models\Events;
    use App\Models\Achievement;
    use App\Models\Comments;
    use App\Models\Games;

    class User extends Authenticatable
    {
        use HasApiTokens, Notifiable;
        use CanFollow, CanBeFollowed;
        use Achiever;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'email', 'password', 'gender', 'firstName', 
            'lastName', 'birthday', 'address', 'type', 'image'
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password', 'remember_token',
        ];

        // link table function
        public function events()
        {
            return $this->belongsToMany(Events::class, 'event_user');
        }
        public function achievement()
        {
            return $this->belongsToMany(Achievement::class, 'achievement_user');
        }
        public function comments()
        {
            return $this->hasMany(Comments::class);
        }
        public function games()
        {
            return $this->hasMany(Games::class);
        }

        // HomeMade function
        public function userPic()
        {
            $img = $this->image;

            if ($img == NULL) {
                switch ( $this->gender ) {
                    case 1:
                        return 'if_boy_playpal_user.png';
                        break;
                    case 2:
                        return 'if_girl_playpal_user.png';
                        break;
                    default:
                        return 'if_unknown_playpal_user.png';
                        break;
                }
            }
            return $img;
        }
    }

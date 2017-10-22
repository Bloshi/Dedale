<?php

    namespace App\Models; 

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Laravel\Passport\HasApiTokens;

    use App\Models\Events;
    use App\Models\Achievement;
    use App\Models\Comments;

    class User extends Authenticatable
    {
        use HasApiTokens, Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'email', 'password', 'gender', 'firstName', 
            'lastName', 'birthday', 'address', 'type'
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password', 'remember_token',
        ];

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
    }

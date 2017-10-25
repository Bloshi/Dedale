<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    // overtrue/laravel-follow package - https://github.com/overtrue/laravel-follow
    use Overtrue\LaravelFollow\Traits\CanBeLiked;

    // dating for human
    use Jenssegers\Date\Date;

    use App\Models\User;
    use Auth;

    class Events extends Model
    {
        use CanBeLiked;

        protected $fillable = [
            'title', 'image', 'place', 'description', 
            'date_start', 'date_end', 'game_id', 
            'user_id', 'organisation'
        ];

        public function user()
        {
            return $this->belongsToMany(User::class, 'event_user');
        }

        // MadeHome function
        public function whenCreatedForHuman()
        {
            $created_at = $this->created_at;
            $date = new Date($created_at, 'Europe/Brussels');
            return $date->ago();
        }
        public function createdBy()
        {
            $creator = User::findOrFail($this->creator_id);
            return $creator;
        }
        public function AuthHasLiked()
        {
            return Auth::user()->hasLiked( $this );
        }
    }
<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    // ReviewRateable systeme - https://github.com/Trexology/laravel-reviewRateable
    use Trexology\ReviewRateable\Contracts\ReviewRateable;
    use Trexology\ReviewRateable\Traits\ReviewRateable as ReviewRateableTrait;

    // dating for human
    use Jenssegers\Date\Date;

    use App\Models\Tags;
    use App\Models\Gameimg;
    use App\Models\User;

    class Games extends Model implements ReviewRateable
    {
        use ReviewRateableTrait;

        protected $fillable = [
            'user_id', 'name', 'note', 'description', 'image'
        ];

        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function tags()
        {
            return $this->belongsToMany(Tags::class, 'game_tag');
        }

        public function gameimg()
        {
            return $this->hasMany(Gameimg::class);
        }

        // MadeHome function 
        public function whenCreatedForHuman()
        {
            $created_at = $this->created_at;
            $date = new Date($created_at, 'Europe/Brussels');
            return $date->ago();
        }
    }

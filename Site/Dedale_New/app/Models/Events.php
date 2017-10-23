<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\User;

    class Events extends Model
    {
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
    }
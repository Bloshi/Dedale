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
    }
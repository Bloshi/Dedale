<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Tags;

    class Games extends Model
    {
        protected $fillable = [
            'user_id', 'name', 'note', 'description', 'image'
        ];

        public function tags()
        {
            return $this->belongsToMany(Tags::class, 'game_tag');
        }
    }

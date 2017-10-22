<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Games;

    class Tags extends Model
    {
        protected $fillable = ['name'];

        public function games()
        {
            return $this->belongsToMany(Games::class, 'game_tag');
        }
    }

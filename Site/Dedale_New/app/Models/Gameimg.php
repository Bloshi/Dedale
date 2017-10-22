<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Games;

    class Gameimg extends Model
    {
        protected $fillable = ['url', 'alt'];

        public function games()
        {
            return $this->belongsTo(Games::class);
        }
    }

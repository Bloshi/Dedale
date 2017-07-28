<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Events;
    use App\Models\Games;

    class Event_games extends Model
    {
        protected $table = 'event_games';
        protected $fillable = ['id_e', 'id_g'];
        
        public $timestamps = false;
        
        public function events()
        {
            return $this->hasMany(Events::class, 'id');
        }
        
        public function games()
        {
            return $this->hasMany(Games::class, 'id');
        }
    }

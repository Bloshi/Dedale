<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Players;
    use App\Models\Participants;
    use App\Models\Event_games;

    class Events extends Model
    {
        protected $table = 'events';
        protected $primaryKey = 'id';
        protected $fillable = ['name', 'location', 'description', 'date_event', 'autor', 'visibility'];
        
        public $timestamps = false;
        
        public function players()
        {
            return $this->hasMany(Players::class, 'mail');
        }
        
        public function participants()
        {
            return $this->belongsTo(Participants::class);
        }
        
        public function event_games()
        {
            return $this->belongsTo(Event_games::class);
        }
    }

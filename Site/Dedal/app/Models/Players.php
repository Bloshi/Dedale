<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Scores;
    use App\Models\Events;
    use App\Models\Participants;
    use App\Models\Grade;
    use App\Models\Posts;

    class Players extends Model
    {
        protected $table = 'players';
        protected $primaryKey = 'mail';
        protected $fillable = ['password', 'picture', 'location', 'firstname', 'name', 'sex', 'birthdate'];
        
        public $timestamps = false;
        
        public function Scores()
        {
            return $this->belongsTo(Scores::class);
        }
        
        public function events()
        {
            return $this->belongsTo(Events::class, 'id');
        }
        
        public function participants()
        {
            return $this->belongsTo(Participants::class);
        }
        
        public function grade()
        {
            return $this->belongsTo(Grade::class);
        }
        
        public function posts()
        {
            return $this->belongsTo(Posts::class, 'id');
        }
    }

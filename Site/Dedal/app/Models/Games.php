<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Categories;
    use App\Models\Parties;
    use App\Models\Event_games;
    use App\Models\Grade;
    use App\Models\Posts;

    class Games extends Model
    {
        protected $table = 'games';
        protected $primaryKey = 'id';
        protected $fillable = ['name', 'picture', 'description', 'category'];
        
        public $timestamps = false;
        
        public function categories()
        {
            return $this->hasOne(Categories::class, 'id');
        }
        
        public function parties()
        {
            return $this->belongsTo(Parties::class, 'id');
        }
        
        public function event_games()
        {
            return $this->belongsTo(Event_games::class);
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

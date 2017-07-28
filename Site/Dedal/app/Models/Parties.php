<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Games;

    class Parties extends Model
        {
        protected $table = 'parties';
        protected $primaryKey = 'id';
        protected $fillable = ['p_date', 'picture', 'game', 'comment'];
        
        public $timestamps = false;
        
        public function games()
        {
            return $this->hasMany(Games::class, 'id');
        }
        
        public function scores()
        {
            return $this->belongsTo(Scores::class);
        }
    }

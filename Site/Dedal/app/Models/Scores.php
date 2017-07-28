<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Players;
    use App\Models\Parties;

    class Scores extends Model
    {
        protected $table = 'scores';
        protected $fillable = ['id_pl', 'id_pa', 'score'];
        
        public $timestamps = false;
        
        public function players()
        {
            return $this->hasMany(Players::class, 'mail');
        }
        
        public function parties()
        {
            return $this->hasMany(Parties::class, 'id');
        }
    }

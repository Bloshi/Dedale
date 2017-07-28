<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Games;
    use App\Models\Players;

    class Grade extends Model
    {
        protected $table = 'grade';
        protected $fillable = ['id_p', 'id_g'];
        
        public $timestamps = false;
        
        public function games()
        {
            return $this->hasMany(Games::class, 'id');
        }
        
        public function players()
        {
            return $this->hasMany(Players::class, 'mail');
        }
    }

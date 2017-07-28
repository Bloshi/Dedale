<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Players;
    use App\Models\Achievements;

    class Achievements_get extends Model
    {
        protected $table = 'achievements_get';
        protected $fillable = ['id_p', 'id_a'];
        
        public $timestamps = false;
        
        public function players()
        {
            return $this->hasMany(Players::class, 'mail');
        }
        
        public function achievements()
        {
            return $this->hasMany(Achievements::class, 'id');
        }
    }

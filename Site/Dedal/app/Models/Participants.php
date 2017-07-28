<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Players;
    use App\Models\Events;

    class Participants extends Model
    {
        protected $table = 'participants';
        protected $fillable = ['id_e', 'id_p'];
        
        public $timestamps = false;
        
        public function players()
        {
            return $this->hasMany(Players::class, 'mail');
        }
        
        public function events()
        {
            return $this->hasMany(Events::class, 'id');
        }
    }

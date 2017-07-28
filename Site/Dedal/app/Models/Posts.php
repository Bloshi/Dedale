<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Games;
    use App\Models\Players;

    class Posts extends Model
    {
        protected $table = 'posts';
        protected $primaryKey = 'id';
        protected $fillable = ['texte', 'game', 'post_date', 'visibility', 'poster'];
        
        public function games()
        {
            return $this->hasMany(Games::class, 'id');
        }
        
        public function players()
        {
            return $this->hasMany(Players::class, 'mail');
        }
    }

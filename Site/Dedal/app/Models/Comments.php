<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Posts;

    class Comments extends Model
    {
        protected $table = 'comments';
        protected $primaryKey = 'id';
        protected $fillable = ['texte', 'rep_date', 'post'];
        
        public $timestamps = false;
        
        public function posts()
        {
            return $this->hasMany(Posts::class, 'id');
        }
    }

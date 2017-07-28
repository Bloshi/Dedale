<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Games;

    class Categories extends Model
    {
        protected $table = 'categories';
        protected $primaryKey = 'id';
        protected $fillable = ['name', 'description'];
        
        public $timestamps = false;
        
        public function games()
        {
            return $this->belongsTo(Games::class, 'id');
        }
    }

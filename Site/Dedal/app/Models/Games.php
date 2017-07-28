<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\Categories;

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
    }

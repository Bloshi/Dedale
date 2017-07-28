<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Achievements extends Model
    {
        protected $table = 'achievements';
        protected $primaryKey = 'id';
        protected $fillable = ['logo', 'name', 'cond', 'description'];
        
        public $timestamps = false;
    }

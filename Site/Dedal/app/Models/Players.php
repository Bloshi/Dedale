<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Players extends Model
    {
        protected $table = 'players';
        protected $primaryKey = 'mail';
        protected $fillable = ['password', 'picture', 'location', 'firstname', 'name', 'sex', 'birthdate'];
        
        public $timestamps = false;
    }

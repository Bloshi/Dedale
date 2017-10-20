<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Games extends Model
    {
        protected $fillable = [
            'user_id', 'name', 'note', 'description', 'image'
        ];
    }

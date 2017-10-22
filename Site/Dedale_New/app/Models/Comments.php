<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Http\Request;

    use App\Models\User;

    class Comments extends Model
    {
        protected $fillable = [
            'content', 'reply'
        ];

        public function user()
        {
            return $this->belongsTo(User::class);
        }
    }

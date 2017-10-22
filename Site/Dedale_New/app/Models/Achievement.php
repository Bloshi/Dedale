<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use App\Models\User;

    class Achievement extends Model
    {
        protected $fillable = [
            'name', 'action', 'description', 'action_count'
        ];

        public $timestamps = false;

        public function user()
        {
            return $this->belongsToMany(User::class, 'achievement_user');
        }

        public function isunlockedFor(User $user): bool
        {
            $user->achievement->contains($this);
        }

        public function unlockActionFor(User $user, string $action, int $count)
        {
            $achievement = $this->newQuery()
                ->where('action', $action)
                ->where('action_count', $count)
                ->first();

            if ($achievement && !$achievement->isunlockedFor($user)) {
                $user->achievement()->attach($achievement);
            }
        }
    }

<?php 

    namespace App\Subscribers;

    use App\Models\Comments;

    class AchievementSubscriber
    {
        public function subscribe($events)
        {
            $events->listen('eloquent.saved: Comments', [$this, 'onNewComment']);
        }

        public function onNewComment(Comments $comments)
        {
            $user = $comments->user;
            $comments_count = $user->comments()->count();
            $this->achievement->unlockActionFor($user, 'comments', $comments_count);
        }
    }
    
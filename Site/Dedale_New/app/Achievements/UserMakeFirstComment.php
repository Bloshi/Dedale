<?php

    namespace App\Achievements;

    use Gstt\Achievements\Achievement;

    class UserMakeFirstComment extends Achievement
    {
        public $name = "Un petit pas...";
        public $description = "Vous avez posté votre premier commentaire !";
        public $points = 1;

        public function whenUnlocked($progress)
        {
            // envoyer un email
        }
    }

<?php

    namespace App\Achievements;

    use Gstt\Achievements\Achievement;

    class Curiosity extends Achievement
    {
        public $name = "Curiosity";
        public $description = "Vous êtes un petit curieux dirait on :)";

        public function whenUnlocked($progress)
        {
            // envoyer un email
        }
    }

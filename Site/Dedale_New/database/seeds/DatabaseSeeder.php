<?php

    use Illuminate\Database\Seeder;
    use App\Models\User;
    use App\Models\Games;
    use App\Models\Tags;
    use App\Models\Events;
    use App\Models\Comments;
    use App\Models\EventUser;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            factory(User::class, 10)->create();
            factory(Games::class, 10)->create();
            factory(Tags::class, 10)->create();
            factory(Comments::class, 10)->create();
            factory(Events::class, 10)->create();
            factory(EventUser::class, 10)->create();
        }
    }

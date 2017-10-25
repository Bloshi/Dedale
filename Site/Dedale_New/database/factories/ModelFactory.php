<?php

use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Games;
use App\Models\Tags;
use App\Models\Events;
use App\Models\Comments;
use App\Models\EventUser;

$factory->define(EventUser::class, function(Faker $faker) {
    return [
        'events_id' => Events::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'accepted' => 0
    ];
});

$factory->define(User::class, function (Faker $faker) {
    static $password;
    static $tinyInt;
    static $date;

    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'birthday' => $date ?: $date = '1991-11-27',
        'password' => $password ?: $password = bcrypt('secret'),
        'address' => $faker->address,
        'remember_token' => str_random(10),
        'gender' => $tinyInt ?: $tinyInt = 0,
        'type' => $tinyInt ?: $tinyInt = 0,
    ];
});

$factory->define(Events::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'place' => $faker->address,
        'description' => $faker->paragraph(random_int(1, 10)),
        'public' => 1,
        'date_start' => $faker->dateTime,
        'date_end' => $faker->dateTime,
        'date_start' => $faker->dateTime,
        'date_end' => $faker->dateTime,
        'game_id' => Games::all()->random()->id,
        'creator_id' => User::all()->random()->id,
        'organisation' => '1,4,6,8,9',
    ];
});

$factory->define(Games::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'name' => $faker->word,
        'description' => $faker->paragraph(random_int(1, 10)),
        'note' => 0
    ];
});

$factory->define(Tags::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph(random_int(1, 10)),
        'user_id' => User::all()->random()->id
    ];
});


// 'image' => $faker->image('public/images/users',400,300, null, false)
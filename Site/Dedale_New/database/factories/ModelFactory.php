<?php

use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Games;
use App\Models\Tags;
use App\Models\Achievement;

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'gender' => $faker->randomDigit
    ];
});

$factory->define(Games::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'name' => $faker->word,
        'description' => $faker->paragraph(random_int(1, 10)),
        'note' => $faker->randomDigit
    ];
});

$factory->define(Tags::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});

$factory->define(Achievement::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(random_int(1, 10))
        // icon pour badge
    ];
});


// 'image' => $faker->image('public/images/users',400,300, null, false)
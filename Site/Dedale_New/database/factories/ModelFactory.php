<?php

use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Games;

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Games::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(random_int(1, 10)),
        'note' => $faker->randomDigit
    ];
});

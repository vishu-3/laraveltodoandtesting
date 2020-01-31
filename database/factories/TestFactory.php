<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    return [
        // 'user_id' => $faker->rand(0,100),
        'name' => $faker->name,
        // 'name' => Str::random(10),
    ];
});

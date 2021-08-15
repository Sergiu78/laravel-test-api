<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plant;
use Faker\Generator as Faker;

$factory->define(Plant::class, function (Faker $faker) {
    return [
        'plant' => $faker->realText(rand(10, 20)),
        'description' => $faker->realText(rand(30, 40)),
        'country' => rand(1, 10),
        'family' => rand(1, 10),
        'created_at' => $faker->dateTimeBetween('-60 days', '-30 days'),
        'updated_at' => $faker->dateTimeBetween('-20 days', '-1 days'),
    ];
});

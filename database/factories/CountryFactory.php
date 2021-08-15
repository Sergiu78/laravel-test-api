<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'plant_id' => rand(1, 10),
        'name' => $faker->realText(rand(10, 11)),
        'created_at' => $faker->dateTimeBetween('-60 days', '-30 days'),
        'updated_at' => $faker->dateTimeBetween('-20 days', '-1 days'),
    ];
});

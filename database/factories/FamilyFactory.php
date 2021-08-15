<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Family;
use Faker\Generator as Faker;

$factory->define(Family::class, function (Faker $faker) {
    return [
    
        'created_at' => $faker->dateTimeBetween('-60 days', '-30 days'),
        'updated_at' => $faker->dateTimeBetween('-20 days', '-1 days'),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Price;
use Faker\Generator as Faker;

$factory->define(Price::class, function (Faker $faker) {
    return [
        'app_id' => $faker->randomDigit,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 250),
    ];
});

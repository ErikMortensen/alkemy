<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\App;
use Faker\Generator as Faker;

$factory->define(App::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'category' => $faker->randomElement(['business', 'dating', 'education', 'card', 'racing', 'arcade', 'Adventure', 'action']),
        'developer_id' => $faker->numberBetween($min = 25, $max = 450),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'size' => $faker->numberBetween($min = 25, $max = 450),
        'downloads' => $faker->numberBetween($min = 10, $max = 3500000),
        'rated' => $faker->numberBetween($min = 1, $max = 5),
    ];
});

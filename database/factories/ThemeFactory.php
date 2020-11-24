<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Theme;
use Faker\Generator as Faker;

$factory->define(Theme::class, function (Faker $faker) {

    return [
        'title_theme' => $faker->word,
        'subject_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Assistance;
use Faker\Generator as Faker;

$factory->define(Assistance::class, function (Faker $faker) {

    return [
        'date_assistances' => $faker->word,
        'student_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

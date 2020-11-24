<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Detail;
use Faker\Generator as Faker;

$factory->define(Detail::class, function (Faker $faker) {

    return [
        'student1_id' => $faker->randomDigitNotNull,
        'theme1_id' => $faker->randomDigitNotNull,
        'question_id' => $faker->randomDigitNotNull,
        'answer_student' => $faker->word,
        'score' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

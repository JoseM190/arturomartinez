<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Exam;
use Faker\Generator as Faker;

$factory->define(Exam::class, function (Faker $faker) {

    return [
        'description' => $faker->word,
        'detail_id' => $faker->randomDigitNotNull,
        'date_exam' => $faker->word,
        'note_exam' => $faker->randomDigitNotNull,
        'student2_id' => $faker->randomDigitNotNull,
        'theme2_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {

    return [
        'names_student' => $faker->word,
        'surnames_student' => $faker->word,
        'ci' => $faker->randomDigitNotNull,
        'email' => $faker->word,
        'password' => $faker->word,
        'birthdate_student' => $faker->word,
        'gender_student' => $faker->word,
        'cellular_student' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

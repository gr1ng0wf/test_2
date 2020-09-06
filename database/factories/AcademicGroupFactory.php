<?php

/** @var Factory $factory */
use App\AcademicGroup;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(AcademicGroup::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'course' => $faker->numberBetween(1, 4),
        'faculty' => $faker->text('24'),
        'archive' => $faker->boolean,
    ];
});

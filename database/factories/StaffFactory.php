<?php

/** @var Factory $factory */
use App\AcademicGroup;
use App\Staff;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Staff::class, function (Faker $faker) {
    $randomGroup = AcademicGroup::inRandomOrder()->limit(1)->get()->first();
    if(empty($randomGroup)) {
        throw new Exception('AcademicGroupsTableIsEmpty');
    }

    return [
        'group_id' => $randomGroup->id,
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'middle_name' => $faker->firstNameMale,
        'birth_date' => $faker->date(),
        'active' => $faker->boolean,
    ];
});

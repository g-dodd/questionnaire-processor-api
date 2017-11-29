<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        'patientFirstName' => $faker->firstName(),
        'patientLastName' => $faker->lastName,
        'patientDateOfBirth' => $faker->date('Y-m-d', '1990-12-31'),
        'phoneNumber' => $faker->phoneNumber,
        'memberId' => $faker->randomNumber(8),
        'status' => 1
    ];
});

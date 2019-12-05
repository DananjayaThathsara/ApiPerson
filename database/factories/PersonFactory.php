<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'f_name' => $faker->firstName,
        'l_name' => $faker->lastName,
        'email'=>$faker->email,
        'phone'=>$faker->phoneNumber

    ];
});

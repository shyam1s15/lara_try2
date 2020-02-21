<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hostel_informationModel;
use Faker\Generator as Faker;

$factory->define(Hostel_informationModel::class, function (Faker $faker) {
    return [
        //
        'hostel_name' => $faker->name,
        'hostel_address'=> $faker->address,
        'category' => $faker->text($maxNbChars = 20),
        'description'=>$faker->text($maxNbChars = 200),
        'hostel_contact'=>$faker->phoneNumber($maxNbChars = 10),
        'hostel_mail'=>$faker->safeEmail
    ];
});

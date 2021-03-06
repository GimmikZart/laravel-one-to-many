<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firstname'=> $faker -> firstName(),
      'lastname'=> $faker -> lastName(),
      'dateOfBirth'=> $faker -> date($format = 'Y-m-d', $max = '1990-3-15'),
      'role'=> $faker -> jobTitle(),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firstname'   =>  $faker -> firstName(),
      'lastname'    =>  $faker -> lastName(),
      'dateOfBirth' =>  $faker -> date($format = 'Y-m-d', $min = '1980-3-14', $max = '2002-1-1'),
      'role'   =>  $faker -> jobTitle(),
    ];
});

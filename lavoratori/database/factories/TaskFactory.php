<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name'        =>  $faker -> word(),
        'description' =>  $faker -> sentence($nbWords = 6, $variableNbWords = true),
        'deadline'    =>  $faker -> date($format = 'Y-m-d', $min = 'now', $max = '2022-6-1'),
    ];
});

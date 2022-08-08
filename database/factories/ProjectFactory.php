<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'brand' => 'Jenn Pereira',
        'text' => $faker->jobTitle,
        'image' => 'layer-3.png',
    ];
});

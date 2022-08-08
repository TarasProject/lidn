<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Blogpost;
use Faker\Generator as Faker;

$factory->define(Blogpost::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'author' => 'Jenn Pereira',
        'short_text' => $faker->titleFemale,
        'full_text' => $faker->text,
    ];
});
<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'body' => $faker->sentence,
        'author_id' => $faker->numberBetween(1,30),
        'category_id' => $faker->numberBetween(1,3),
    ];
});

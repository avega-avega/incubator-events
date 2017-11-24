<?php

use Faker\Generator as Faker;

$factory->define(incubator\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->word()
    ];
});

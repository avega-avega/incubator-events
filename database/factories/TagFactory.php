<?php

use Faker\Generator as Faker;

$factory->define(Incubator\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->word()
    ];
});

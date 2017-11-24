<?php

use Faker\Generator as Faker;

$factory->define(incubator\Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'description' => $faker->paragraph(1),
        'content' => $faker->text(600),
        'created_at' => $faker->date(),
    ];
});

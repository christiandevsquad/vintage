<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'subName' => $faker->word,
        'price' => $faker->numberBetween(100, 300),
        'description' => $faker->paragraph,
        'image' => $faker->imageUrl($width=640, $height=480),
        'tag' => $faker->word
    ];
});

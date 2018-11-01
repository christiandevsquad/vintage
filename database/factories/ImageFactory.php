<?php

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(App\Models\Image::class, function (Faker $faker) {
    return [
        'product_id' => function() {
            return Product::all()->random();
        },
        'product_image' => $faker->image('public/images/upload', 640, 480, null, false)
        //'product_image' => $faker->image(640, 480)
    ];
});

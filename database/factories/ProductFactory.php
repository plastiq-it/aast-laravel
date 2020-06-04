<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'sku' => $faker->randomNumber(8),
        'description' => $faker->text(100),
        'price' => $faker->randomFloat(2,0,50),
        'is_active' => $faker->boolean(70),
    ];
});

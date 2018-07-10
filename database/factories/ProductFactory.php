<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Product::class, function (Faker $faker) {
     return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(100,1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(20,70),
        'user_id' => function(){
           return User::all()->random();
        }
    ];
});

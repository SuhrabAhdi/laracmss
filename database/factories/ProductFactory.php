<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id'=>2,
        'brand_id'=>$faker->numberBetween($min=2,$max=3),
        'name'=>$faker->word,
        'url'=>$faker->word,
        'title'=>$faker->word,
        'price'=>12,
        'description'=>$faker->sentence,
        'created_at_ip'=>$faker->ipv4,
        'updated_at_ip'=>$faker->ipv4
    ];
});

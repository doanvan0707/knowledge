<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $user = App\User::pluck('id');
    $category = App\Category::pluck('id');
    return [
        'title' => $faker->title,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'description' => $faker->text($maxNbChars = 200),
        'content' => $faker->text($maxNbChars = 200),
        'user_id' => $faker->randomElement($user),
        'category_id' => $faker->randomElement($category),
    ];
});

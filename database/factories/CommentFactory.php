<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    $user = App\User::pluck('id');
    $post = App\Post::pluck('id');
    return [
        'title' => $faker->title,
        'content' => $faker->text($maxNbChars = 200),
        'user_id' => $faker->randomElement($user),
        'post_id' => $faker->randomElement($post),
    ];
});

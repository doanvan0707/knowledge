<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $role = App\Role::pluck('id');
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123123'),
        'remember_token' => str_random(10),
        'yourname' => $faker->name,
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->streetAddress,
        'role_id' => $faker->randomElement($role),
    ];
});

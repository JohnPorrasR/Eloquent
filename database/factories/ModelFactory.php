<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(EloquentORM\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'gender' => $faker->randomElement(['f','m']),
        'biography' => $faker->text(rand(50, 200)),
        'remember_token' => str_random(10),
    ];
});



$factory->define(EloquentORM\Category::class, function (Faker\Generator $faker){
    return [
        'name' => $faker->name,
    ];
});

$factory->define(EloquentORM\Book::class, function (Faker\Generator $faker){
    return [
        'title' => $faker->name,
        'description' => $faker->text,
        'status' => $faker->randomElement(['public','draft']),
        'category_id' => $faker->randomElement([1,2,3]),
    ];
});
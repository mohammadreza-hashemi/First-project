<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Card;
use App\Note;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
//        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'remember_token' => Str::random(10),
        'api_token'=> str_random(60),
    ];
});


$factory->define(Card::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
       
//       
    ];
});

$factory->define(Note::class, function (Faker $faker) {
    return [
         'user_id'=> factory(App\User::class)->create()->id,
         'card_id'=> factory(App\Card::class)->create()->id,
         'body' => $faker->paragraph(),
    ];
});

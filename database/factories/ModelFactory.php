<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'cp' => $faker->randomNumber($nbDigits = 5),
        'poblacion' => $faker->city,
        'telefono' => $faker->regexify('9[0-9]{8}'),
        'movil' => $faker->regexify('6[0-9]{8}'),
        'fax' => $faker->regexify('9[0-9]{8}'),
        'direccion' => $faker->streetAddress,
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d'),
        'lugar_nacimiento' => $faker->city,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Alumno::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->sentence,
        'apellidos'=> $faker->sentence,
        'foto' => $faker->imageUrl($width=1200, $height=400),
    ];
});

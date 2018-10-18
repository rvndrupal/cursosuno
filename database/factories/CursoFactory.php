<?php

use Faker\Generator as Faker;

$factory->define(App\Curso::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->sentence,
        'descripcion'=> $faker->sentence,
        'alumno_id' => \App\Alumno::all()->random()->id,
        'category_id' => \App\Category::all()->random()->id,
    ];
});

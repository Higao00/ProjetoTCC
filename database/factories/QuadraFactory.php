<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Quadra;
use Faker\Generator as Faker;

$factory->define(Quadra::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name(),
        'endereco_id' => 1,
        'valor_aluguel' => 100,
        'owner_id' => 1,
        'status' => 1,
    ];
});

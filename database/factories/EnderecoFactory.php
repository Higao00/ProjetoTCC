<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Endereco;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Endereco::class, function (Faker $faker) {
    return [
        // 'cep' => $faker->cep(),
        // 'rua' => $faker->rua(),
        // 'bairro' => $faker->bairro(),
        // 'numero' => $faker->numero(),
        // 'complemento' => 'casa',
        // 'cidade' => $faker->cidade(),
        // 'estado' => $faker->estado(),
    ];
});

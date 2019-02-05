<?php

use Faker\Generator as Faker;
use App\Horse;

$factory->define(Horse::class, function (Faker $faker) {
    return [
        "name" => 'Meatball',
        "gender" => 'mare',
        "breed" => 'Hanovarian',
        "color" => 'Brown',
        "height" => '16.2',
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        }
    ];
});

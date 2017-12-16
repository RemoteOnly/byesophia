<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Following::class, function (Faker $faker) {
    return [
        'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        'camerist_id' => \App\Models\User::where('is_camerist', 1)->inRandomOrder()->first()->id
    ];
});

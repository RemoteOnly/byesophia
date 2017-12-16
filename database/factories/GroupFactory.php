<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Group::class, function (Faker $faker) {
    return [
        'camerist_id' => \App\Models\User::inRandomOrder()->first()->id,
        'area_id' => \App\Models\Area::inRandomOrder()->first()->id,
        'ext_json' => json_encode(['area' => '日本 东京']),
        'description' => $faker->text(),
    ];
});

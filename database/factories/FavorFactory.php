<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Favor::class, function (Faker $faker) {
    return [
        'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        'image_id' => \App\Models\Image::inRandomOrder()->first()->id,
        'group_id' => function ($favor) {
            return \App\Models\Image::find($favor['image_id'])->group_id;
        }
    ];
});

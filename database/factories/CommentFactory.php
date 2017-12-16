<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        'image_id' => \App\Models\Image::inRandomOrder()->first()->id,
        'at_user_id' => function ($comment) {
            return \App\Models\Image::find($comment['image_id'])->camerist_id ?? 0;
        },
        'group_id' => function ($comment) {
            return \App\Models\Image::find($comment['image_id'])->group_id;
        },
        'content' => $faker->text(),
    ];
});


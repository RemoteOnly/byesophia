<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Image::class, function (Faker $faker) {
    static $sizes = [
        ['width' => 640, 'height' => 480],
        ['width' => 480, 'height' => 640]
    ];
    $index = array_rand($sizes, 1);
    return [
        'camerist_id' => \App\Models\User::inRandomOrder()->first()->id,
        'group_id' => \App\Models\Group::inRandomOrder()->first()->id,
        'area_id' => \App\Models\Area::inRandomOrder()->first()->id,
        'url' => $faker->imageUrl($sizes[$index]['width'], $sizes[$index]['height']),
        'ext_json' => json_encode(['area' => '日本 东京']),
        'display_order' => random_int(0, 8),
    ];
});

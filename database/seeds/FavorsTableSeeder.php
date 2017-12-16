<?php

use Illuminate\Database\Seeder;

class FavorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Favor::class)->times(30)->create();
    }
}

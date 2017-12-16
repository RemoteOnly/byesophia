<?php

use Illuminate\Database\Seeder;

class CountryAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['id' => 1, 'name' => 'japan', 'display_order' => 0]
        ]);

        DB::table('areas')->insert([
            ['id' => 1, 'name' => '东京', 'country_id' => '1', 'display_order' => 1],
            ['id' => 2, 'name' => '大阪', 'country_id' => '1', 'display_order' => 2],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => '山', 'parent_id' => 0, 'display_order' => 0],
            ['name' => '水', 'parent_id' => 0, 'display_order' => 0],
            ['name' => '樱花', 'parent_id' => 0, 'display_order' => 0],
            ['name' => '卡通', 'parent_id' => 0, 'display_order' => 0],
            ['name' => '美食', 'parent_id' => 0, 'display_order' => 0],
            ['name' => '服饰', 'parent_id' => 0, 'display_order' => 0],
            ['name' => '建筑', 'parent_id' => 0, 'display_order' => 0],
            ['name' => '人物', 'parent_id' => 0, 'display_order' => 0],
        ]);
    }
}

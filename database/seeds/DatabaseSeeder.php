<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(CountryAreasTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        //$this->call(GroupsTableSeeder::class);
        //$this->call(ImagesTableSeeder::class);
        //$this->call(FavorsTableSeeder::class);
        //$this->call(FollowingsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}

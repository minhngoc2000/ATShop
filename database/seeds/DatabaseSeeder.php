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
         $this->call(UsersTableSeeder::class);
        $this->call(Categories::class);
        $this->call(SubCategories::class);
        $this->call(Products::class);
                $this->call(news::class);
        $this->call(staff::class);





    }
}

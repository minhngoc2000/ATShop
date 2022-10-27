<?php

use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        $category=array('Thời trang nam','Thời trang nữ','Phụ kiện');
        foreach ($category as $value){
            DB::table('Categories')->insert([
                'name' => $value,
        ]);
        }


    }
}

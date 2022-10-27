<?php

use Illuminate\Database\Seeder;

class SubCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory=array('Áo sơ mi nam','Áo thun nam','Áo khoác nam','Quần thun nam','Quần jean nam','Quần kaki nam','Quần tây nam','Áo sơ mi nữ','Áo thun áo kiểu','Đầm quần','Áo khoác nữ','Đồ mặc nhà,áo ngủ');
        foreach ($subcategory as $value){
            DB::table('SubCategory')->insert([
                'Name' => $value,
                'CategoryId'=>rand(1,3)

            ]);
        }
    }
}

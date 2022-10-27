<?php

use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('Products')->insert([
                'Name' => 'Áo khoác mùa hè hà nội ' . rand(1, 100),
                'Price' => rand(100000,500000 ),
                'Slug' => 'ao-khoac-mua-he-ha-noi'. rand(1, 100),
                'Code'=>'SP'.rand(100, 1000),
                'SubCategoryId'=>1,
                'Image'=>'1529319872_1529319856_dsc_7670_thumb_294x441.jpg'

            ]);
        }
    }
}

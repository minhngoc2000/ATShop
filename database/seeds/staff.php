<?php

use Illuminate\Database\Seeder;

class staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'name' => 'admin',
            'code'=>'admin001',
            'email'=>'thuanuit96@gmail.com',
            'password'=>bcrypt('123456'),
            'phone'=>'0973962984',
            'sex'=>'name',
            'birthday'=>'06/01/1996',
            'address'=>'Linh trung,thu duc,ho chi minh',
            'level'=>1

        ]);
    }
}

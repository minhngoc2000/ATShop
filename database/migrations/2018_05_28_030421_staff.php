<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Staff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('staff',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('email')->unique();;
            $table->string('password');
            $table->string('phone');
            $table->string('sex');
            $table->string('birthday');
            $table->string('address');
            $table->integer('level')->default(0);
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

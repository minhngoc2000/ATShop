<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductColors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('product_colors',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('style');
            $table->timestamps();

        });
        Schema::table('Products', function($table)
        {
            $table->foreign('id_color')->references('id')->on('product_colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


    }
}

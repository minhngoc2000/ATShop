<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order_Detail',function (Blueprint $table){
            $table->increments('Id');
            $table->integer('OrderId')->unsigned();
            $table->integer('pro_id')->unsigned();
            $table->float('Quantity')->nullable();
            $table->float('Unit_Price')->nullable();
            $table->timestamps();
            $table->foreign('OrderId')->references('Id')->on('Order')->onDelete('cascade');



        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OrderDetail');
    }

}

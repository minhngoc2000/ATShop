<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order',function (Blueprint $table){
            $table->increments('Id');
            $table->integer('UserId')->unsigned();
            $table->string('Name')->nullable();
            $table->string('Email')->nullable();
            $table->string('Address')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->date('Order_date')->nullable();
            $table->string('Total')->nullable();
            $table->string('Note')->nullable();
            $table->string('Confirm')->nullable();
            $table->string('Payment_Method')->nullable();
            $table->string('Payment_Status')->nullable();
            $table->string('Status')->nullable();
            $table->timestamps();
            $table->foreign('UserId')->references('id')->on('users');


    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Order');
    }
}

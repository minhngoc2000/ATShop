<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('Product_detail',function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('size')->nullable();
            $table->float('quantity')->nullable();
            $table->string('status')->nullable();
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('Id')->on('Products')->onDelete('cascade');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->timestamps();

        });
        Schema::table('Order_Detail', function($table)
        {
            $table->foreign('pro_id')->references('id')->on('Product_detail')->onDelete('cascade');

        });
        Schema::table('Products', function($table)
        {
            $table->foreign('SubCategoryId')->references('Id')->on('SubCategory')->onDelete('cascade');

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

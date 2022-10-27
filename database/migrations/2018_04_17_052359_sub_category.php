<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create(
            'SubCategory',function (Blueprint $table){
            $table->increments('Id');
            $table->string('Name')->nullable();
            $table->integer('CategoryId')->unsigned();
            $table->foreign('CategoryId')->references('Id')->on('Categories')->onDelete('cascade');;
            $table->timestamps();

        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SubCategory');
    }
}

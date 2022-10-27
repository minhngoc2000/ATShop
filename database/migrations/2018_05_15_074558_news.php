<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('News',function (Blueprint $table){
            $table->increments('Id');
            $table->string('Title')->nullable();
            $table->string('Slug')->nullable();
            $table->string('Author')->nullable();
             $table->string('Intro')->nullable();
            $table->longText('Content')->nullable();
            $table->string('Status')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('Images')->nullable();
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

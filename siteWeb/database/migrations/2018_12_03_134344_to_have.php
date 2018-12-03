<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ToHave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('to_have', function (Blueprint $table) 
        {
            $table->unsignedInteger('fk_picture');    
            $table->unsignedInteger('fk_tag');
        
            $table->foreign('fk_picture')
                ->references('picture_id')->on('pictures')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('fk_tag')
                ->references('tag_id')->on('tags')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('to_have');
    }
}

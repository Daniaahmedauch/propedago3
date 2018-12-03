<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ToBelong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_belong', function (Blueprint $table) {
            $table->unsignedInteger('fk_picture');
            $table->unsignedInteger('fk_category');

            $table->foreign('fk_picture')
                ->references('picture_id')->on('pictures')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('fk_category')
                ->references('category_id')->on('categories')
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
        Schema::drop('to_belong');
    }
}

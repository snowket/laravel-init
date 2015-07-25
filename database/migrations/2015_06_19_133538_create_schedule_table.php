<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('lesson_id');
            $table->integer('class_id');
            $table->integer('dayofweek');
            $table->integer('sortindex');
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
        Schema::drop('schedule');
    }
}

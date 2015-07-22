<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->integer('lesson_id');
            $table->integer('controll');
            $table->integer('homework');
            $table->integer('classwork');
            $table->date('date');
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
        Schema::drop('mark');
    }
}

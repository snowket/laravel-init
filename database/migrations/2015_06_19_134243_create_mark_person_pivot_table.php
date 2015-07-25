<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkPersonPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark_person', function(Blueprint $table) {
            $table->integer('mark_id')->unsigned()->index();
            $table->foreign('mark_id')->references('id')->on('mark')->onDelete('cascade');
            $table->integer('person_id')->unsigned()->index();
            $table->foreign('person_id')->references('id')->on('persons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mark_person');
    }
}

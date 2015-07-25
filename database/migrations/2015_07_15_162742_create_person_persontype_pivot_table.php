<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonPersonTypePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_persontype', function(Blueprint $table) {
            $table->integer('person_id')->unsigned()->unique()->index();
            $table->foreign('person_id')->references('id')->on('person')->onDelete('cascade');
            $table->integer('persontype_id')->unsigned()->unique()->index();
            $table->foreign('persontype_id')->references('id')->on('persontype')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('person_persontype');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('applicant_id');
            $table->enum('location_id',['Scarborough','Richmond Hill','North York','Toronto']);
            $table->enum('style',['part-time','full-time','seasonal','temp'])->nullable();
            $table->boolean('flexable')->nullable();
            $table->boolean('nightShift')->nullable();
            $table->date('availableDate')->nullable();
            $table->tinyInteger('weeklyHour')->nullable();
            $table->enum('position',['server','cook','dish','management'])->nullable();
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
        Schema::dropIfExists('positions');
    }
}

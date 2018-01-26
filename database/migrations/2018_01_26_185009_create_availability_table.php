<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('applicant_id');
            $table->time('monFrom')->nullable;
            $table->time('monTo')->nullable;;
            $table->time('tueFrom')->nullable;;
            $table->time('tueTo')->nullable;;
            $table->time('wedFrom')->nullable;;
            $table->time('wedTo')->nullable;;
            $table->time('thuFrom')->nullable;;
            $table->time('thuTo')->nullable;;
            $table->time('friFrom')->nullable;;
            $table->time('friTo')->nullable;;
            $table->time('satFrom')->nullable;;
            $table->time('satTo')->nullable;;
            $table->time('sunFrom')->nullable;;
            $table->time('sunTo')->nullable;;
            $table->enum('hours',['10','20','44' ,'44+'])->default('44');
            $table->boolean('holiday')->defautl(true);
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
        Schema::dropIfExists('availability');
    }
}

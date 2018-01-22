<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastworks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('applicant_id');
            $table->string('company')->nullable();
            $table->string('phone',16)->nullable();
            $table->string('position',32)->nullable();
            $table->string('supervisor',32)->nullable();
            $table->boolean('verify')->nullable();
            $table->string('noVerifyReason')->nullable();
            $table->string('address',64)->nullable();
            $table->string('city',64)->nullable();
            $table->char('province',2)->nullable();
            $table->date('from')->nullable();;
            $table->date('to')->nullable();
            $table->string('quitReason')->nullable();
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
        Schema::dropIfExists('pastworks');
    }
}

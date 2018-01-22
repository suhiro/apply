<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cName',16);
            $table->string('firstName',32);
            $table->string('lastName',32);
            $table->tinyinteger('gender');
            $table->boolean('chinese')->default(false);
            $table->boolean('cantonese')->default(false);
            $table->boolean('english')->default(false);
            $table->boolean('french')->default(false);
            $table->string('address',64)->nullable();
            $table->string('city',64)->nullable();
            $table->char('province',2)->nullable();
            $table->string('postalCode',16)->nullable();
            $table->string('email');
            $table->string('phone',16);
            $table->date('dob');
            $table->enum('status',['visitor','student','worker','pr','citizen']);
            $tagble->date('expiry')->nullable();
            $table->string('hometown',32)->nullable();
            $table->date('canada_entry')->nullable();
            $table->string('emergency_person',16)->nullable();
            $table->string('emergency_phone',16)->nullable();
            $table->string('emergency_relation',16)->nullable();
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
        Schema::dropIfExists('applicants');
    }
}

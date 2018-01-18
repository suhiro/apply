<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('applicant_id');
            $table->enum('education',['below','highschool','college','university','graduate'])->default('below');
            $table->boolean('enrolled')->default(false);
            $table->string('major')->nullable();
            $table->string('school')->nullable();
            $table->string('address',64)->nullable();
            $table->string('city',64)->nullable();
            $table->char('province',2)->nullable();
            $table->string('interest')->nullable();
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
        Schema::dropIfExists('educations');
    }
}

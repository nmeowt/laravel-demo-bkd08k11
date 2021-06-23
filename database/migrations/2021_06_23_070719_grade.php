<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Grade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade', function (Blueprint $table) {
            $table->increments('idGrade');
            $table->string('nameGrade', 50);
            $table->unsignedInteger('idMajor');
            $table->unsignedInteger('idCourse');
            $table->foreign('idMajor')->references('idMajor')->on('major');
            $table->foreign('idCourse')->references('idCourse')->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grade');
    }
}

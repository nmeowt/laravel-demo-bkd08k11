<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ministry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("ministry", function (Blueprint $table) {
            $table->increments("idMinistry");
            $table->string("fullName", 50);
            $table->string("email", 50);
            $table->string("password", 30);
            $table->boolean("role");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("ministry");
    }
}

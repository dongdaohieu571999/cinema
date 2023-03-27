<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->integer('user_id')->unsigned(); 
            $table ->foreign('user_id')->references('user_id')->on('users');
            $table->integer('show_id')->unsigned(); 
            $table ->foreign('show_id')->references('show_id')->on('show');
            $table->string('seat_number');
            $table->string('booking_date');
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
        Schema::dropIfExists('booking');
    }
};

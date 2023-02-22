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
            $table->integer('ticket_id')->unsigned(); 
            $table ->foreign('ticket_id')->references('ticket_id')->on('ticket');
            $table->string('booking_date');
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

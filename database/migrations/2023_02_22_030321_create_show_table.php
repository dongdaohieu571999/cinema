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
        Schema::create('show', function (Blueprint $table) {
            $table->increments('show_id');
            $table->integer('m_id')->unsigned(); 
            $table ->foreign('m_id')->references('m_id')->on('movie');
            $table->integer('hall_id')->unsigned(); 
            $table ->foreign('hall_id')->references('hall_id')->on('hall');
            $table->string('stt_time');   
            $table->string('showdate');
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
        Schema::dropIfExists('show');
    }
};

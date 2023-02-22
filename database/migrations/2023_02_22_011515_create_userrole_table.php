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
        Schema::create('userrole', function (Blueprint $table) {
            $table->integer('user_id')->unsigned(); 
            $table ->foreign('user_id')->references('user_id')->on('users');
            $table->integer('role_id')->unsigned(); 
            $table ->foreign('role_id')->references('role_id')->on('role');         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userrole');
    }
};

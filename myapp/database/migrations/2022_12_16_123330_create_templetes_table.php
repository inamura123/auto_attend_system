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
        Schema::create('templetes', function (Blueprint $table) {
            $table->id('templete_id');
            $table->string('name');
            $table->integer('week');
            $table->integer('start_hour');
            $table->integer('start_minute');
            $table->integer('end_hour');
            $table->integer('end_minute');
            $table->integer('late_minute');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templetes');
    }
};

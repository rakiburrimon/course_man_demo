<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Batch', function (Blueprint $table) {
            $table->increments('batch_id');
            $table->string('batch_name');
            $table->string('batch_duration');
            $table->integer('course_id') -> unsigned();
            $table->string('course_name') -> unsigned();

            $table->foreign('course_id') -> references('course_id') -> on('Course');
            $table->foreign('course_name') -> references('course_name') -> on('Course');

            $table->rememberToken();
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
        Schema::dropIfExists('Batch');
    }
}

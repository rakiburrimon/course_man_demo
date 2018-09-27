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

            $table->foreign('course_id') -> reference('course_id') -> on('course');
            $table->foreign('course_name') -> reference('course_name') -> on('course');

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

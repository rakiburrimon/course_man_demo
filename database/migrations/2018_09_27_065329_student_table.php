<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Student', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_name');
            $table->string('student_email')->unique();
            $table->string('student_contact');
            $table->integer('batch_id') -> unsigned();
            $table->string('batch_name') -> unsigned();
            $table->integer('course_id') -> unsigned();
            $table->string('course_name') -> unsigned();
            $table->string('result');

            $table->foreign('batch_id') -> references('batch_id') -> on('Batch');
            $table->foreign('batch_name') -> references('batch_name') -> on('Batch');
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
        Schema::dropIfExists('Student');
    }
}

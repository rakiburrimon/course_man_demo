<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_name');
            $table->string('student_email')->unique();
            $table->string('student_contact');
            $table->integer('batch_id') -> unsigned();
            $table->string('batch_name') -> unsigned();
            $table->integer('course_id') -> unsigned();
            $table->string('course_name') -> unsigned();
            $table->string('result');

            $table->foreign('batch_id') -> reference('batch_id') -> on('batch');
            $table->foreign('batch_name') -> reference('batch_name') -> on('batch');
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
        Schema::dropIfExists('student');
    }
}

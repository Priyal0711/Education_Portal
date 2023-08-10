<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandardStudentTable extends Migration
{
    public function up()
    {
        Schema::create('standard_student', function (Blueprint $table) {
            $table->unsignedBigInteger('standard_id');
            $table->unsignedBigInteger('student_id');
            $table->foreign('standard_id')->references('id')->on('standards')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['standard_id', 'student_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('standard_student');
    }
}


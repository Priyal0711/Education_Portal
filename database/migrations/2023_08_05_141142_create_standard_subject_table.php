<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandardSubjectTable extends Migration
{
    public function up()
    {
        Schema::create('standard_subject', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('standard_id');
            $table->unsignedBigInteger('subject_id');
            $table->timestamps();

            $table->foreign('standard_id')->references('id')->on('standards')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('standard_subject');
    }
}


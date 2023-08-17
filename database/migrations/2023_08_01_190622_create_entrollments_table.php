<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('entrollments', function (Blueprint $table) {
            $table->id();
            $table->String('enroll_no');
            $table->unsignedBigInteger('batch_id');
            $table->unsignedBigInteger('student_id');
            $table->date('join_date');
            $table->double('fee');


            $table-> foreign('batch_id')->references('id')->on('batches');
            $table->foreign('student_id')->references('id')->on('students');
            $table->timestamps();


        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrollments');
    }
};

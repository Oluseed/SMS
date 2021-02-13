<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('amc_srms')->create('test_results', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('class');
            $table->string('term_session');
            $table->string('sub1')->nullable();
            $table->string('sub2')->nullable();
            $table->string('sub3')->nullable();
            $table->string('sub4')->nullable();
            $table->string('sub5')->nullable();
            $table->string('sub6')->nullable();
            $table->string('sub7')->nullable();
            $table->string('sub8')->nullable();
            $table->string('sub9')->nullable();
            $table->string('sub10')->nullable();
            $table->string('sub11')->nullable();
            $table->string('sub12')->nullable();
            $table->string('sub13')->nullable();
            $table->string('sub14')->nullable();
            $table->string('sub15')->nullable();
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
        Schema::dropIfExists('test_results');
    }
}

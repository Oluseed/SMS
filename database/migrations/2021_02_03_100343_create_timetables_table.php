<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('amc_srms')->create('timetables', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('day');
            $table->string('col1')->nullable();
            $table->string('col2')->nullable();
            $table->string('col3')->nullable();
            $table->string('col4')->nullable();
            $table->string('col5')->nullable();
            $table->string('col6')->nullable();
            $table->string('col7')->nullable();
            $table->string('col8')->nullable();
            $table->string('col9')->nullable();
            $table->string('col10')->nullable();
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
        Schema::dropIfExists('timetables');
    }
}

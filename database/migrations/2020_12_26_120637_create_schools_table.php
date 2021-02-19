<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('srms')->create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->unique();
            $table->string('school_code')->unique();
            $table->binary('school_logo')->nullable();
            $table->string('school_motto')->nullable();
            $table->string('school_email')->nullable();
            $table->string('school_term');
            $table->string('school_database')->nullable();
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
        Schema::connection('anc_srms')->dropIfExists('schools');
    }
}

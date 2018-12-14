<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lab_id');
            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('age');
            $table->string('sex')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_no');
            $table->string('requested_by')->nullable();
            $table->string('clinical_detail')->nullable();
            $table->string('exam_required')->nullable();
            $table->string('specimen')->nullable();
            $table->string('clinic')->nullable();

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
        Schema::dropIfExists('patients');
    }
}

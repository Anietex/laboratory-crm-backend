<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChemicalPathologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemical_pathologies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->integer('age')->nullable();
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->string('requested_by')->nullable();
            $table->string('email')->nullable();
            $table->string('exam_required')->nullable();
            $table->string('specimen')->nullable();
            $table->string('clinic')->nullable();
            $table->string('total_cholesterol')->nullable();
            $table->string('triglyceride')->nullable();
            $table->string('hdlm')->nullable();
            $table->string('vldl')->nullable();
            $table->string('idl')->nullable();
            $table->string('eucr')->nullable();
            $table->string('creatinine')->nullable();
            $table->string('urea')->nullable();
            $table->string('sodium')->nullable();
            $table->string('potassium')->nullable();
            $table->string('chloride')->nullable();
            $table->string('bicarbonate')->nullable();
            $table->string('fsh')->nullable();
            $table->string('lh')->nullable();
            $table->string('prolactin')->nullable();
            $table->string('progesteron')->nullable();
            $table->string('estradol')->nullable();
            $table->string('psa')->nullable();
            $table->string('ast')->nullable();
            $table->string('alt')->nullable();
            $table->string('alp')->nullable();
            $table->string('bilirubin')->nullable();
            $table->string('conj_bilirubin')->nullable();
            $table->string('total_protien')->nullable();
            $table->string('albunim')->nullable();
            $table->string('globulin')->nullable();
            $table->string('glocose')->nullable();
            $table->string('rbs')->nullable();
            $table->string('fbs')->nullable();
            $table->string('hrs2appbs')->nullable();
            $table->string('amylase')->nullable();
            $table->string('cpk')->nullable();
            $table->string('gamma_glutamic')->nullable();
            $table->string('uric_acid')->nullable();
            $table->string('calcuim')->nullable();
            $table->string('inorganic_phos')->nullable();
            $table->string('tsh')->nullable();
            $table->string('appearance')->nullable();
            $table->string('ph')->nullable();
            $table->string('protein')->nullable();
            $table->string('ketone_bodies')->nullable();
            $table->string('nitric')->nullable();
            $table->string('ascorbic')->nullable();
            $table->string('leucocytes')->nullable();
            $table->string('specific_gravity')->nullable();
            $table->string('ur_glucose')->nullable();
            $table->string('urobilinogen')->nullable();
            $table->string('blood')->nullable();
            $table->string('crystals')->nullable();
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
        Schema::dropIfExists('chemical_pathologies');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHaematologyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haematology_reports', function (Blueprint $table) {
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
            $table->string('hb')->nullable();
            $table->string('pcv')->nullable();
            $table->string('rbc')->nullable();
            $table->string('mcv')->nullable();
            $table->string('mch')->nullable();
            $table->string('mchc')->nullable();
            $table->string('wbc')->nullable();
            $table->string('platelets')->nullable();
            $table->string('retics')->nullable();
            $table->string('esr')->nullable();
            $table->string('nuet')->nullable();
            $table->string('lymp')->nullable();
            $table->string('mono')->nullable();
            $table->string('eosino')->nullable();
            $table->string('baso')->nullable();
            $table->string('blast')->nullable();
            $table->string('promvelo')->nullable();
            $table->string('myelo')->nullable();
            $table->string('matemye')->nullable();
            $table->string('normod')->nullable();
            $table->string('bleeding_time')->nullable();
            $table->string('clothing_time')->nullable();
            $table->string('prothrobin_time')->nullable();
            $table->string('partial_prothrobin_time')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('hb_genotype')->nullable();
            $table->string('cross_matching')->nullable();
            $table->string('film_report')->nullable();
            $table->string('lab_scientist')->nullable();
            $table->string('screening')->nullable();
            $table->string('quantitative')->nullable();
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
        Schema::dropIfExists('haematology_reports');
    }
}

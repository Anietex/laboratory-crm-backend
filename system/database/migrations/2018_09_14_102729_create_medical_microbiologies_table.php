<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalMicrobiologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_microbiologies', function (Blueprint $table) {
            $table->engine ='MyISAM';
            $table->increments('id');
            $table->text('surname')->nullable();
            $table->text('first_name')->nullable();
            $table->text('middle_name')->nullable();
            $table->integer('age')->nullable();
            $table->text('date')->nullable();
            $table->text('time')->nullable();
            $table->text('requested_by')->nullable();
            $table->text('email')->nullable();
            $table->text('exam_required')->nullable();
            $table->text('specimen')->nullable();
            $table->text('clinic')->nullable();
            $table->text('macroscopy')->nullable();
            $table->text('cell_count')->nullable();
            $table->text('differential_wbc')->nullable();
            $table->text('pus_cell')->nullable();
            $table->text('rbc')->nullable();
            $table->text('epithelial_cell')->nullable();
            $table->text('gram_pus_cell')->nullable();
            $table->text('gve_ccoci_pos')->nullable();
            $table->text('gve_rods_pos')->nullable();
            $table->text('gve_ccoci_neg')->nullable();
            $table->text('gve_rods_neg')->nullable();
            $table->text('gram_epithelial_cell')->nullable();
            $table->text('zn_stain_pus_cell')->nullable();
            $table->text('zn_stain_afb_x1')->nullable();
            $table->text('zn_stain_afb_x2')->nullable();
            $table->text('zn_stain_afb_x3')->nullable();
            $table->text('test_time')->nullable();
            $table->text('abstinence')->nullable();
            $table->text('volume')->nullable();
            $table->text('colour')->nullable();
            $table->text('liquefaction')->nullable();
            $table->text('viscosity')->nullable();
            $table->text('ph')->nullable();
            $table->text('viability')->nullable();
            $table->text('motility_active')->nullable();
            $table->text('motility_sluggish')->nullable();
            $table->text('motility_non_motile')->nullable();
            $table->text('count')->nullable();
            $table->text('hpf_pus_cell')->nullable();
            $table->text('morph_pus_cell')->nullable();
            $table->text('hpf_rbc')->nullable();
            $table->text('morph_rbc')->nullable();
            $table->text('hpf_epithelial_cell')->nullable();
            $table->text('morph_epithelial_cell')->nullable();
            $table->text('stool_macroscopy')->nullable();
            $table->text('wet_preparation')->nullable();
            $table->text('concentration')->nullable();
            $table->text('malaria_parasite')->nullable();
            $table->text('microfilaria_skin')->nullable();
            $table->text('microfilaria_blood')->nullable();
            $table->text('stool_occult_blood')->nullable();
            $table->text('vdrl_test')->nullable();
            $table->text('aso_titre')->nullable();
            $table->text('chlamydia_serology')->nullable();
            $table->text('hepbag')->nullable();
            $table->text('hcv_ab')->nullable();
            $table->text('helicobacter')->nullable();
            $table->text('retroviral_screening')->nullable();
            $table->text('cd4_count')->nullable();
            $table->text('given')->nullable();
            $table->text('read')->nullable();
            $table->text('result')->nullable();
            $table->text('s_typhi_o')->nullable();
            $table->text('s_typhi_h')->nullable();
            $table->text('s_paratyphi_a_o')->nullable();
            $table->text('s_paratyphi_a_h')->nullable();
            $table->text('s_paratyphi_b_o')->nullable();
            $table->text('s_paratyphi_b_h')->nullable();
            $table->text('s_paratyphi_c_o')->nullable();
            $table->text('s_paratyphi_c_h')->nullable();
            $table->text('comment')->nullable();
            $table->text('amoxycillin')->nullable();
            $table->text('cefuroxime')->nullable();
            $table->text('ceftriaxone')->nullable();
            $table->text('ceftazidime')->nullable();
            $table->text('cotrimoxazole')->nullable();
            $table->text('norfloxacin')->nullable();
            $table->text('tebacylin')->nullable();
            $table->text('nalidixic_acid')->nullable();
            $table->text('streptomacycin')->nullable();
            $table->text('septrin')->nullable();
            $table->text('ciprofloxin')->nullable();
            $table->text('chloramphenicol')->nullable();
            $table->text('erythromycin')->nullable();
            $table->text('gentymacin')->nullable();
            $table->text('ofloxacin')->nullable();
            $table->text('nitrofuratoin')->nullable();
            $table->text('ampiclox')->nullable();
            $table->text('amoxycilin')->nullable();
            $table->text('clindamycin')->nullable();
            $table->text('levofloxcin')->nullable();
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
        Schema::dropIfExists('medical_microbiologies');
    }
}

@extends('reports.master')
@section('content')
<style>
	

	th,td{
		font-size: 10px;
	}

	strong{
		padding-top: 50px;
	}


	p{
		/* font-size: 10px; */
		/* padding-top: 50px;
		line-height: 6000px; */
	}	

	.r-heading{
		font-size: 15px;
	}

	.label{
		font-size: 8px;
	}

	

	.lab-sci,.date{
				top: 950px;
	}


	.footer{
		top: 1000px;
	}
</style>

<div class="view-report-table  absolute">
	<table width="98%">
		<thead>
			<tr>
				<th colspan="6" class="r-heading">MEDICAL MICROBIOLOGY AND PARASITOLOGY</th>
				<th class="r-heading">LAB NO.: {{$report->lab_id}} </th>
			</tr>
			<tr>
				<td>
					<label>Surname</label><br>
					{{ $report->patient->surname }}
				</td>
				<td>
					<label>Other Names</label><br>
					{{ $report->patient->first_name.' '.$report->patient->middle_name }}
				</td>
				<td>
					<label>Age</label><br>
					{{$report->patient->age}}
				</td>
				<td>
					<label>Sex</label><br>
					{{$report->patient->sex}}
				</td>
				<td>
					<label>Date</label><br>
						{{date('Y-m-d',strtotime($report->patient->created_at))}}
					
				</td>
				<td>
					<span class="label">Clinic</span><br>
					{{$report->clinic}}
				</td>
				<td>
					<label>Requested By</label><br>
					{{$report->requested_by}}
				</td>
			</tr>
			<tr>
				<td>
					<label>Clinical Detail</label><br>
					{{$report->clinical_detail}}
				</td>
				<td colspan="2">
					<label>Exam Required</label><br>
					{{$report->exam_required}}
				</td>
				<td colspan="2">
					<label>Specimen</label><br>
					{{$report->specimen}}
				</td>
				<td colspan="2">
					<label>Current Antibiotics Therapy</label><br>
					{{$report->antibiotic_therapy}}
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="2" width="30%">

					@if($section1)
						<p><strong>Microscopy:</strong>{{$report->macroscopy==''?'................................................': $report->macroscopy}}</p>
						<br><p><strong>Cell Count: </strong>{{$report->cell_count==''?'................................................': $report->cell_count}}</p>
						<br><p><strong>Differential WBC: </strong>{{$report->differential_wbc==''?'.....................................': $report->differential_wbc}}</p>
					@endif
					@if($hpf)
						<br><h4>Wet Preparation (HPF)</h4>
						<br><p><strong>Pus Cells: </strong>{{$report->pus_cell==''?'..................................................': $report->pus_cell}}</p>
						<br><p><strong>RBC: </strong>{{$report->rbc==''?'..........................................................': $report->rbc}}</p>
						<br><p><strong>Epithelial Cells: </strong>{{$report->epithelial_cell==''?'.......................................': $report->epithelial_cell}}</p>
					@endif

					@if($gramstain)
						<br><h4>Gramstain</h4>
						<br><p><strong>Pus Cell: </strong>{{$report->gram_pus_cell==''?'..................................................': $report->gram_pus_cell}}</p>
						<br><p><strong>G +Ve COCCI: </strong>{{$report->gve_ccoci_pos==''?'.........................................': $report->gve_ccoci_pos}}</p>
						<br><p><strong>G +Ve RODS: </strong>{{$report->gve_rods_pos==''?'.........................................': $report->gve_rods_pos}}</p>
						<br><p><strong>G -Ve COCCI: </strong>{{$report->gve_ccoci_neg==''?'.........................................': $report->gve_ccoci_neg}}</p>
						<br><p style="margin:50px"><strong>G -Ve RODS: </strong>{{$report->gve_rods_neg==''?'.........................................': $report->gve_rods_neg}}</p>
						<br><p><strong>Epithelial cells: </strong>{{$report->gram_epithelial_cell==''?'.....................................': $report->gram_epithelial_cell}}</p>
					@endif
					@if($znStain)

						<br><p><strong>ZN STAIN:</strong>
							<p><strong>Pus cell: </strong>{{$report->zn_stain_pus_cell==''?'.................................................': $report->zn_stain_pus_cell}}</p>
							<p><strong>AFB x1: </strong>{{$report->zn_stain_afb_x1==''?'..................................................': $report->zn_stain_afb_x1}}</p>
							<p><strong>AFB x2: </strong>{{$report->zn_stain_afb_x2==''?'..................................................': $report->zn_stain_afb_x2}}</p>
							<p><strong>AFB x3: </strong>{{$report->zn_stain_afb_x3==''?'..................................................': $report->zn_stain_afb_x1}}</p>
						</td>
					@endif


					<td colspan="2">
						@if($semenAnalysis)
							<h6><u>SEMEM ANALYSIS</u></h6>
							<br><p>
								<strong>Production/Test Time: </strong>
								{{$report->test_time==''?'...................': $report->test_time}}
								<strong>Abstinence: </strong>
								{{$report->abstinence==''?'.....................': $report->abstinence}}
							</p>
							<br><p>
								<strong>Volume: </strong>
								{{$report->volume==''?'..................': $report->volume}}
								<strong>Colour: </strong>
								{{$report->colour==''?'...............': $report->colour }}
								<strong>Liquefaction: </strong>
								{{$report->liquefaction==''?'.............': $report->liquefaction }}
							</p>
							<br><p>
								<strong>Viscocity: </strong>
								{{$report->viscocity==''?'..................': $report->viscosity}}
								<strong>pH: </strong>
								{{$report->ph==''?'...................': $report->ph }}
								<strong>Viability: </strong>
								{{$report->viability==''?'...................': $report->viability }}
							</p>
							<br><p><strong>Motility: </strong> Active: {{$report->motility_active==''?'..............': $report->motility_active }}<br>
								<span style="margin-left:55px">Sluggish: {{$report->motility_sluggish==''?'..............': $report->motility_sluggish }}</span><br>
								<span style="margin-left:55px">Non-motile: {{$report->motility_non_motile==''?'..............': $report->motility_non_motile }}</span><br>
							</p>
							<br><p><strong>COUNT: </strong>{{$report->count==''?'...........................................................': $report->count}} X 10 <sup>6</sup> sperm/ml</p>
						
						@endif
						@if($section2)
							<br><table class="hpf">
								<thead>
									<tr>
										<td></td>
										<th>Particulate Debris(HPF)</th>
										<th>Morphology(%)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Pus Cells</td>
										<td>{{$report->hpf_pus_cell}}</td>
										<td>{{$report->morph_pus_cell}}</td>
									</tr>
									<tr>
										<td>RBC</td>
										<td>{{$report->hpf_rbc}}</td>
										<td>{{$report->morph_rbc}}</td>
									</tr>
									<tr>
										<td>Epithelial Cells</td>
										<td>{{$report->hpf_epithelial_cell}}</td>
										<td>{{$report->morph_epithelial_cell}}</td>
									</tr>
								</tbody>
							</table>
						@endif
						@if($stoolMac)
							<h4>Stool Microscopy</h4>
							<br><p><strong>Macroscopy: </strong>{{$report->stool_macroscopy==''?'............................................................................': $report->stool_macroscopy}}</p>
							<br><p><strong>Wet Prepartion: </strong>{{$report->wet_preparation==''?'......................................................................': $report->wet_preparation}}</p>
							<br><p><strong>Concentration: </strong>{{$report->concentration==''?'......................................................................': $report->concentration}}</p>
							<br><p><strong>Malaria Parasite: </strong>{{$report->malaria_parasite==''?'.................................................................': $report->malarial_parasite}}</p>
							<br><p><strong>Microfilaria Skin: </strong>{{$report->microfilaria_skin==''?'...................................................................': $report->microfilaria_skin}}</p>
							<br><p><strong>Microfilaria Blood: </strong>{{$report->microfilaria_blood==''?'...............................................................': $report->microfilaria_blood}}</p>
							<br><p><strong>Stool Occult Blood </strong>{{$report->stool_occult_blood==''?'.................................................................': $report->stool_occult_blood}}</p>
						@endif
					</td>
					<td colspan="3">

						@if($section3)
							<br><p><strong>VDRL Test: </strong>{{$report->vdrl_test==''?'.................................................': $report->vdrl_test}}</p>
							<br><p><strong>ASO Titre: </strong>{{$report->aso_titre==''?'..................................................': $report->aso_titre}}</p>
							<br><p><strong>Chlamydia Serology: </strong>{{$report->chlamydia_serology==''?'..................................': $report->chlamdia_serology}}</p>
							<br><p><strong>Hep B, Ag: </strong>{{$report->hepbag==''?'....................................................': $report->hepbag}}</p>
							<br><p><strong>HCV Ab: </strong>{{$report->hcv_ab==''?'........................................................': $report->hcv_ab}}</p>
							<br><p><strong>Helicobacter Pylori Ab: </strong>{{$report->helocobacter==''?'..............................': $report->helicobacter}}</p>
							<br><p><strong>Retroviral Screening Test: </strong>{{$report->retroviral_screening==''?'.......................': $report->retroviral_screening}}</p>
							<br><p><strong>Retroviral Confirmation: </strong>{{$report->retroviral_confirmation==''?'.............................': $report->retroviral_screening}}</p>
							<br><p><strong>CD<sub>4</sub> Count: </strong>{{$report->cd4_count==''?'......................................................': $report->cd4_count}}</p>
						@endif
						@if($mantouxTest)
							<h4>MANTOUX TEST</h4>
							<br><p>
								<strong>Given: </strong>
								{{$report->given==''?'.........................': $report->given}}
								<strong>Read: </strong>
								{{$report->read==''?'........................': $report->read}}
							<br></p>
							<br><p><strong>Result: </strong>{{$report->result==''?'...........................................................': $report->result}}</p>
						@endif
						@if($serologicalTest)
							<br><h4>SEROLOGICAL TEST</h4>
							<br>	<h6>Widal Test</h6>
							<br><table class="widal-tbl" width="100%">
								<thead>
									<tr>
										<th rowspan="2">Antigen</th>
										<th colspan="2">Antibody</th>
									</tr>
									<tr>
										<th>"O"</th>
										<th>"H"</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>S. Typhi</td>
										<td>{{$report->s_typhi_o}}</td>
										<td>{{$report->s_typhi_h}}
										</tr>
										<tr>
											<td>S. Paratyphi A</td>
											<td>{{$report->s_paratyphi_a_o}}</td>
											<td>{{$report->s_paratyphi_a_h}}</td>
										</tr>
										<tr>
											<td>S. Paratyphi B</td>
											<td>{{$report->s_paratyphi_b_o}}</td>
											<td>{{$report->s_paratyphi_b_h}}</td>
										</tr>
										<tr>
											<td>S. Paratyphi C</td>
											<td>{{$report->s_paratyphi_c_o}}</td>
											<td>{{$report->s_paratyphi_c_h}}</td>
										</tr>
									</tbody>
								</table>
							@endif
							
							@if($report->comment!='')
							  <br><p><strong>Comment: </strong> {{str_replace("\n",'<br>',$report->comment)}}</p>
							@endif
						</td>

					</tr>
					<tr>
					@if($section4)
						<td colspan="7" class="p-0">
							<h6 class="py-0 my-0">Culture</h6>
							<p><strong>Organism(s) isolated: </strong>{{$report->organism_isolated==''?'.........': $report->organism_isolated}}</p>
							<table class="culture" width="100%">
								<thead>
									<tr>
										<th ></th>
										<th colspan="4">Sensitivity</th>
										<th></th>
										<th colspan=""></th>
										<th colspan="4">Sensitivity</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Antimicrobial Agents</th>
										<th>+++</th>
										<th>++</th>
										<th>+</th>
										<th>R</th>
										<th></th>
										<th>Antimicrobial Agents</th>
										<th>+++</th>
										<th>++</th>
										<th>+</th>
										<th>R</th>
									</tr>
									<tr>
										<td>
											Amoxycillin/Clavulante
										</td>
										<td>
											@if($report->amoxycillin =='ppp')✔@endif
										</td>
										<td>
											@if($report->amoxycillin =='pp')✔@endif
										</td>
										<td>
											@if($report->amoxycillin =='p')✔@endif
										</td>
										<td>
											@if($report->amoxycillin =='r')✔@endif
										</td>
										<td></td>
										<td>
											Ciprofloxacin
										</td>
										<td>
											@if($report->ciprofloxin =='ppp')✔@endif
										</td>
										<td>
											@if($report->ciprofloxin =='pp')✔@endif
										</td>
										<td>
											@if($report->ciprofloxin =='p')✔@endif
										</td>
										<td>
											@if($report->ciprofloxin =='r')✔@endif
										</td>
									</tr>
									<tr>
										<td>
											Cefuroxime
										</td>
										<td>
											@if($report->cefuroxime =='ppp')✔@endif
										</td>
										<td>
											@if($report->cefuroxime =='pp')✔@endif
										</td>
										<td>
											@if($report->cefuroxime =='p')✔@endif
										</td>
										<td>
											@if($report->cefuroxime =='r')✔@endif
										</td>
										<td></td>
										<td>
											Chloramphenicol
										</td>
										<td>
											@if($report->chloramphenicol =='ppp')✔@endif
										</td>
										<td>
											@if($report->chloramphenicol =='pp')✔@endif
										</td>
										<td>
											@if($report->chloramphenicol =='p')✔@endif
										</td>
										<td>
											@if($report->chloramphenicol =='r')✔@endif
										</td>
									</tr>
									<tr>
										<td>
											Ceftriaxone
										</td>
										<td>
											@if($report->ceftriaxone =='ppp')✔@endif
										</td>
										<td>
											@if($report->ceftriaxone =='pp')✔@endif
										</td>
										<td>
											@if($report->ceftriaxone =='p')✔@endif
										</td>
										<td>
											@if($report->ceftriaxone =='r')✔@endif
										</td>
										<td></td>
										<td>
											Erythromycin
										</td>
										<td>
											@if($report->erythromycin =='ppp')✔@endif
										</td>
										<td>
											@if($report->erythromycin =='pp')✔@endif
										</td>
										<td>
											@if($report->erythromycin =='p')✔@endif
										</td>
										<td>
											@if($report->erythromycin =='r')✔@endif
										</td>
									</tr>
									<tr>
										<td>
											Cotrimoxazole
										</td>
										<td>
											@if($report->cotrimoxazole =='ppp')✔@endif
										</td>
										<td>
											@if($report->cotrimoxazole =='pp')✔@endif
										</td>
										<td>
											@if($report->cotrimoxazole =='p')✔@endif
										</td>
										<td>
											@if($report->cotrimoxazole =='r')✔@endif
										</td>
										<td></td>
										<td>
											Gentamycin
										</td>
										<td>
											@if($report->gentymacin =='ppp')✔@endif
										</td>
										<td>
											@if($report->gentymacin =='pp')✔@endif
										</td>
										<td>
											@if($report->gentymacin =='p')✔@endif
										</td>
										<td>
											@if($report->gentymacin =='r')✔@endif
										</td>
									</tr>
									<tr>
										<td>
											Norfloxacin
										</td>
										<td>
											@if($report->norfloxacin =='ppp')✔@endif
										</td>
										<td>
											@if($report->norfloxacin =='pp')✔@endif
										</td>
										<td>
											@if($report->norfloxacin =='p')✔@endif
										</td>
										<td>
											@if($report->norfloxacin =='r')✔@endif
										</td>
										<td></td>
										<td>
											Ofloxacin
										</td>
										<td>
											@if($report->ofloxacin =='ppp')✔@endif
										</td>
										<td>
											@if($report->ofloxacin =='pp')✔@endif
										</td>
										<td>
											@if($report->ofloxacin =='p')✔@endif
										</td>
										<td>
											@if($report->ofloxacin =='r')✔@endif
										</td>
									</tr>
									<tr>
										<td>
											Tabacylin
										</td>
										<td>
											@if($report->tabacylin =='ppp')✔@endif
										</td>
										<td>
											@if($report->tabacylin =='pp')✔@endif
										</td>
										<td>
											@if($report->tabacylin =='p')✔@endif
										</td>
										<td>
											@if($report->tabacylin =='r')✔@endif
										</td>
										<td></td>
										<td>
											Nitrofurantoin
										</td>
										<td>
											@if($report->nitrofuratoin =='ppp')✔@endif
										</td>
										<td>
											@if($report->nitrofuratoin =='pp')✔@endif
										</td>
										<td>
											@if($report->nitrofuratoin =='p')✔@endif
										</td>
										<td>
											@if($report->nitrofuratoin =='r')✔@endif
										</td>
									</tr>
									<tr>
										<td>
											Nalidixic Acid
										</td>
										<td>
											@if($report->nalidixic_acid =='ppp')✔@endif
										</td>
										<td>
											@if($report->nalidixic_acid =='pp')✔@endif
										</td>
										<td>
											@if($report->nalidixic_acid =='p')✔@endif
										</td>
										<td>
											@if($report->nalidixic_acid =='r')✔@endif
										</td>
										<td></td>
										<td>
											Ampiclox
										</td>
										<td>
											@if($report->ampiclox =='ppp')✔@endif
										</td>
										<td>
											@if($report->ampiclox =='pp')✔@endif
										</td>
										<td>
											@if($report->ampiclox =='p')✔@endif
										</td>
										<td>
											@if($report->ampiclox =='r')✔@endif
										</td>
									</tr>
									<tr>
										<td>
											Streptomycin
										</td>
										<td>
											@if($report->streptomacycin =='ppp')✔@endif
										</td>
										<td>
											@if($report->streptomacycin =='pp')✔@endif
										</td>
										<td>
											@if($report->streptomacycin =='p')✔@endif
										</td>
										<td>
											@if($report->streptomacycin =='r')✔@endif
										</td>
										<td></td>
										<td>
											Amoxycilin
										</td>
										<td>
											@if($report->amoxycilin =='ppp')✔@endif
										</td>
										<td>
											@if($report->amoxycilin =='pp')✔@endif
										</td>
										<td>
											@if($report->amoxycilin =='p')✔@endif
										</td>
										<td>
											@if($report->amoxycilin =='r')✔@endif
										</td>
									</tr>
									<tr>
										<td>
											Septrin
										</td>
										<td>
											@if($report->septrin =='ppp')✔@endif
										</td>
										<td>
											@if($report->septrin =='pp')✔@endif
										</td>
										<td>
											@if($report->septrin =='p')✔@endif
										</td>
										<td>
											@if($report->septrin =='r')✔@endif
										</td>
										<td></td>
										<td>
											Clidamycin
										</td>
										<td>
											@if($report->clidamycin =='ppp')✔@endif
										</td>
										<td>
											@if($report->clidamycin =='pp')✔@endif
										</td>
										<td>
											@if($report->clidamycin =='p')✔@endif
										</td>
										<td>
											@if($report->clidamycin =='r')✔@endif
										</td>
									</tr>
									<tr>
										<td>
											Levofloxcin
										</td>
										<td>
											@if($report->levofloxcin =='ppp')✔@endif
										</td>
										<td>
											@if($report->levofloxcin =='pp')✔@endif
										</td>
										<td>
											@if($report->levofloxcin =='p')✔@endif
										</td>
										<td>
											@if($report->levofloxcin =='r')✔@endif
										</td>
										
									</tr>
								</tbody>
							</table>
						</td>

						@endif
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
	@endsection
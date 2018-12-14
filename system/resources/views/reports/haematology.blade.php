@extends('reports.master')
@section('content')

<div class="view-report-table absolute">
	<table class="browser-default">
		<thead>
			<tr>
				<th colspan="8" class="r-heading">Haematology Report Form</th>
				<th  colspan="2" class="r-heading">Lab No.:   {{ $report->lab_id }}</th>
				<tr>
					<td colspan="4">
						<p class="label">Surname</p><br>
						{{ $report->patient->surname }}
					</td>
					<td>
						<p class="label">Other Name</p><br>
						{{ $report->patient->first_name.' '.$report->patient->middle_name}}
					</td>
					<td>
						<p class="label">Age</p><br>
						{{ $report->patient->age}}
					</td>
					<td>
						<p class="label">Sex</p><br>
						{{ $report->patient->sex}}
					</td>
					<td>
						<p class="label">Date</p><br>
						{{date('Y-m-d',strtotime($report->patient->created_at))}}
					</td>
					<td>
						<p class="label">Time</p><br>
						{{ date('h:i a',strtotime($report->created_at)) }}
					</td>
					<td>
						<p class="label">Requested By</p><br>
						{{ $report->requested_by }}
					</td>
				</tr>
				<tr>
					<td colspan="4">
						<p class="label">Clinical Details</p><br>
						{{ $report->clinical_detail }}
					</td>
					<td colspan="3">
						<p class="label">Exam Required</p><br>
						{{ $report->exam_required }}
					</td>
					<td colspan="2">
						<p class="label">Specimen</p><br>
						{{ $report->specimen }}
					</td>
					<td colspan="1">
						<p class="label">Clinic</p><br>
						{{$report->clinic}}
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<!--<td><i class="material-icons">✔_square</i></td>-->
					<td></td>
					<th>Unit</th>
					<th>Test</th>
					<th>Normal</th>
					<td></td>
					<td colspan="5"></td>
				</tr>
				<tr>
					<td width="4%">@if($report->hb!='')✔@endif</td>
					<td>hb</td>
					<td>g/dl</td>
					<td width="8%">{{ $report->hb}}</td>
					<td>{{array_key_exists('hb',$normalValue)?$normalValue['hb']:' 11 - 17.5'}} </td>
					<td width="4%">@if($report->blood_group!='')✔@endif</td>
					<td colspan="2">Blood group</td>
					<td colspan="3">{{ $report->blood_group }}</td>
				</tr>
				<tr>
					<td width="4%">@if($report->pcv!='')✔@endif</td>
					<td>PCV/HCT</td>
					<td>%</td>
					<td width="8%">{{ $report->pcv}}</td>
					<td>{{array_key_exists('pcv',$normalValue)?$normalValue['pcv']:'40 - 54'}}</td>
					<td width="4%">@if($report->hb_genotype!='')✔@endif</td>
					<td colspan="2">Hb Genotype</td>
					<td colspan="3">{{ $report->hb_genotype }}</td>
				</tr>
				<tr>
					<td width="4%">@if($report->rbc!='')✔@endif</td>
					<td>RBC</td>
					<td>X10<sup>12</sup>/1</td>
					<td width="8%">{{ $report->rbc}}</td>
					<td>{{array_key_exists('rbc',$normalValue)?$normalValue['rbc']:'4.5 - 5.5'}}  </td>
					<td width="4%">@if($report->cross_matching!='')✔@endif</td>
					<td colspan="2">Cross matching</td>
					<td colspan="3">{{ $report->cross_matching }}</td>
				</tr>
				<tr>
					<td width="4%">@if($report->mcv!='')✔@endif </td>
					<td>MCV</td>
					<td>F1</td>
					<td width="8%">{{ $report->mcv}}</td>
					<td>{{array_key_exists('mcv',$normalValue)?$normalValue['mcv']:'76 - 93'}} </td>
					<td rowspan="20" colspan="6">
						<div class="title-t">
							<h6>Electrophoresis</h6>
							<h6><u>Film Report</u></h6>
							<p>{!! str_replace("\n",'<br>',$report->film_report) !!}</p>
						</div>
					</td>
				</tr>
				<tr>
					<td width="4%">@if($report->mch!='')✔@endif </td>
					<td>MCH</td>
					<td>Pg</td>
					<td width="8%">{{ $report->mch}}</td>
					<td>{{array_key_exists('mch',$normalValue)?$normalValue['mch']:'27 - 31'}}  </td>
				</tr>
				<tr>
					<td width="4%">@if($report->mchc!='')✔@endif </td>
					<td>MCHC</td>
					<td>g/dl</td>
					<td width="8%">{{ $report->mchc}}</td>
					<td>{{array_key_exists('mchc',$normalValue)?$normalValue['mchc']:'31 - 35'}}  </td>
				</tr>
				<tr>
					<td width="4%">@if($report->wbc!='')✔@endif </td>
					<td>WBC</td>
					<td>X10<sup>9</sup>/1</td>
					<td width="8%">{{ $report->wbc}}</td>
					<td>{{array_key_exists('wbc',$normalValue)?$normalValue['wbc']:'3.0 - 13.0'}}  </td>
				</tr>
				<tr>
					<td width="4%">@if($report->platelets!='')✔@endif</td>
					<td>Platelets</td>
					<td>X10<sup>9</sup>/1</td>
					<td width="8%">{{ $report->platelets}}</td>
					<td>{{array_key_exists('platelets',$normalValue)?$normalValue['platelets']:'76 - 93'}} </td>
				</tr>
				<tr>
					<td width="4%">@if($report->retics!='')<i>✔</i>@endif</td>
					<td>Retics</td>
					<td>%</td>
					<td width="8%">{{ $report->retics}}</td>
					<td>{{array_key_exists('retics',$normalValue)?$normalValue['retics']:'0.2 - 0.3'}}    </td>
				</tr>
				<tr>
					<td width="4%">@if($report->esr!='')✔@endif </td>
					<td>ESR</td>
					<td>Westergren</td>
					<td width="8%">{{ $report->esr}}</td>
					<td>{{array_key_exists('esr',$normalValue)?$normalValue['esr']:'5.7 mm in 1Hr'}}  </td>
				</tr>

				@foreach($extraFields as $field )
					@if($field->section == "section1")
						<tr>
							<td width="4%">@if($report->esr!='')✔@endif </td>
							<td>{{$field->label}}</td>
							<td></td>
							<td width="8%">{{ $field->value}}</td>
							<td>{{$field->normal}}</td>
						</tr>
					@endif
				@endforeach
				<tr>
					<th colspan="4">DIFFERENTIALS(%)</th>
					<td colspan="1"></td>
				</tr>
				<tr>
					<th colspan="3"></th>
					<th>Test</th>
					<th>Normal</th>
				</tr>
				<tr>
					<td colspan="3">NUET</td>
					<td width="8%">{{ $report->nuet}}</td>
					<td>{{array_key_exists('nuet',$normalValue)?$normalValue['nuet']:'40 - 75'}}    </td>
				</tr>
				<tr>
					<td colspan="3">LYMP</td>
					<td width="8%">{{ $report->lymp}}</td>
					<td>{{array_key_exists('lymp',$normalValue)?$normalValue['lymp']:'20 - 45'}}   </td>
				</tr>
				<tr>
					<td colspan="3">MONO</td>
					<td width="8%">{{ $report->mono}}</td>
					<td>{{array_key_exists('mono',$normalValue)?$normalValue['mono']:' 2 - 10'}}  </td>
				</tr>
				<tr>
					<td colspan="3">EOSINO</td>
					<td width="8%">{{ $report->eosino}}</td>
					<td>{{array_key_exists('eosino',$normalValue)?$normalValue['eosino']:'0 - 2'}} </td>
				</tr>
				<tr>
					<td colspan="3">Blast</td>
					<td width="8%">{{ $report->blast}}</td>
					<td>{{array_key_exists('blast',$normalValue)?$normalValue['blast']:''}}</td>
				</tr>
				<tr>
					<td colspan="3">Promvelo</td>
					<td width="8%">{{ $report->promvelo}}</td>
					<td>{{array_key_exists('promvelo',$normalValue)?$normalValue['promvelo']:''}}</td>
				</tr>
				<tr>
					<td colspan="3">Myelo</td>
					<td width="8%">{{ $report->myelo}}</td>
					<td>{{array_key_exists('myelo',$normalValue)?$normalValue['myelo']:''}}</td>
				</tr>
				<tr>
					<td colspan="3">Matemye</td>
					<td width="8%">{{ $report->matemye}}</td>
					<td>{{array_key_exists('matemye',$normalValue)?$normalValue['matemye']:''}}</td>
				</tr>
				<tr>
					<td colspan="3">Band</td>
					<td width="8%">{{ $report->band}}</td>
					<td>{{array_key_exists('band',$normalValue)?$normalValue['band']:''}}</td>
				</tr>
				<tr>
					<td colspan="3">Normod</td>
					<td width="8%">{{ $report->normod}}</td>
					<td>{{array_key_exists('normod',$normalValue)?$normalValue['normod']:''}}</td>
				</tr>

				@foreach($extraFields as $field )
					@if($field->section == "section2")
						<tr>
							<td colspan="3">{{$field->label}}</td>
							<td width="8%">{{ $field->value}}</td>
							<td>{{$field->normal}}</td>
						</tr>
					@endif
				@endforeach
				<tr>
					<th colspan="5">
						Coagulation Tests
					</th>
				</tr>
				<tr>
					<th colspan="3"></th>
					<th>Test</th>
					<th>Normal</th>
					<th></th>
					<th colspan="4" >G6PD TEST</th>
				</tr>
				<tr>
					<td width="4%">@if($report->bleeding_time!='')✔@endif </td>
					<td colspan="2">Bleeding time</td>
					<td>{{ $report->bleeding_time }}</td>
					<td>2 - 7 secs</td>
					<td class="no-border"></td>
					<td colspan="2">
						Screening
					</td>
					<td colspan="2">
						{{$report->screening}}
					</td>
				</tr>
				<tr>
					<td width="4%">@if($report->clotting_time!='')✔@endif </td>
					<td colspan="2">Clotting time</td>
					<td>{{ $report->clotting_time }}</td>
					<td>{{array_key_exists('clotting_time',$normalValue)?$normalValue['clotting_time']:'5 - 11 secs'}} </td>
					<td class="no-border"></td>
					<td colspan="2">
						Qualitative
					</td>
					<td colspan="2">
						{{$report->quantitative}}
					</td>
				</tr>
				<tr>
					<td width="4%">@if($report->prothrobin_time!='')✔@endif </td>
					<td colspan="2">Prothrobin time</td>
					<td>{{ $report->prothrobin_time }}</td>
					<td>{{array_key_exists('prothrobin_time',$normalValue)?$normalValue['prothrobin_time']:'11 - 14 secs'}}  </td>
				</tr>
				<tr>
					<td width="4%">@if($report->prothrobin_control!='')✔@endif </td>
					<td colspan="2">Prothrobin Control</td>
					<td>{{ $report->prothrobin_time }}</td>
					<td>{{array_key_exists('prothrobin_control',$normalValue)?$normalValue['prothrobin_time']:'11 - 14 secs'}}  </td>
				</tr>


				<tr>
					<td width="4%">@if($report->partial_prothrobin_time!='')✔@endif</td>
					<td colspan="2">Partial Thromboplatsin time</td>
					<td>{{ $report->partial_prothrobin_time }}</td>
					<td>{{array_key_exists('partial_prothrobin_time',$normalValue)?$normalValue['partial_prothrobin_time']:'30 - 40 secs'}}</td>
				</tr>

				<tr>
					<td width="4%">@if($report->partial_prothrobin_control!='')✔@endif</td>
					<td colspan="2">Partial Thromboplatsin Control</td>
					<td>{{ $report->partial_prothrobin_control }}</td>
					<td>{{array_key_exists('partial_prothrobin_control',$normalValue)?$normalValue['partial_prothrobin_control']:'30 - 40 secs'}}</td>
				</tr>



				@foreach($extraFields as $field )
					@if($field->section == "section3")
						<tr>
							<td width="4%">✔</td>
							<td colspan="2">{{$field->label}}</td>
							<td>{{$field->value}}</td>
							<td>{{$field->normal}}</td>
						</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	@endsection
@extends('reports.master')
@section('content')
<style>
     td,th{
          font-size: 12px;
          padding: 2.5px 2px;
          /* text-align: left; */
     } 



     .footer{
          width: 750px;
     }  

     .date{
         position: absolute;
         left:450px
       } 
</style>
<div class="view-report-table absolute chem-path">
     <table style="overflow: wrap" autosize="5">
          <thead>
               <tr>
                    <th colspan="10" class="r-heading">Chemical Pathology Report</th>
                    <th colspan="2" class="r-heading">Lab No.: {{ $report->lab_id }}</th>
               </tr>
          </thead>
          <tbody>
               <tr>
                    <td colspan="2">
                         <span class="label">Surname</span><br>
                         {{$report->patient->surname}}
                    </td>
                    <td colspan="4">
                         <span class="label">Other Names</span><br>
                         {{$report->patient->first_name.' '.$report->patient->middle_name}}
                    </td>
                    <td colspan="2">
                         <span class="label">Age</span><br>
                         {{$report->patient->age}}
                    </td>
                    <td width="10%">
                         <span class="label">Sex</span><br>
                         {{$report->patient->sex}}
                    </td >
                    <td width="10%">
                         <span class="label">Date</span><br>
                         {{date('Y-m-d',strtotime($report->patient->created_at)) }}
                    </td>
                    <td  width="10%">
                         <span class="label">Time</span><br>
                         {{ date('h:i a',strtotime($report->created_at))}}
                    </td>
                    <td width="17%">
                         <span class="label">Requested By</span><br>
                         {{$report->requested_by}}
                    </td>
               </tr>
               <tr>
                    <td colspan="4">
                         <span class="label">Clinical Details</span><br>
                         {{ $report->clinical_detail }}
                    </td>
                    <td colspan="3">
                         <span class="label">Exam Required</span><br>
                         {{ $report->exam_required }}
                    </td>
                    <td colspan="2">
                         <span class="label">Specimen</span><br>
                         {{ $report->specimen }}
                    </td>
                    <td colspan="3">
                         <span class="label">Clinic</span><br>
                         {{$report->clinic}}
                    </td>
               </tr>

               



               @unless (count($lipidProfile)<1)
                    <tr>
                        <th colspan="12">LIPID PROFILE</th>
                    </tr>
                    <tr>
                         <th colspan="2">Test</th>
                         <th colspan="2">Unit</th>
                         <th colspan="5">Result</th>
                         <th colspan="3">Normal</th>
                    </tr>

                    @foreach ($lipidProfile as $test)
                         <tr>
                             <td colspan="2">{{$test['test']}}</th>
                             <td colspan="2">{{$test['unit']}}</th>
                             <td colspan="5">{!! str_replace("\n","<br>",$test['value']) !!}</th>
                             <td colspan="3">{{array_key_exists($test['id'],$normalValue)?$normalValue[$test['id']]:$test['normal']}}</th>
                         </tr>
                    @endforeach
               @endunless




               @unless (count($hormonalProfile)<1)
                    <tr>
                        <th colspan="12">HORMONAL PROFILE</th>
                    </tr>
                    <tr>
                         <td colspan="2">Test</th>
                         <td colspan="2">Unit</th>
                         <td colspan="5">Result</th>
                         <td colspan="3">Normal</th>
                    </tr>

                    @foreach ($hormonalProfile as $test)
                         <tr>
                             <td colspan="2">{{$test['test']}}</th>
                             <td colspan="2">{{$test['unit']}}</th>
                             <td colspan="5">{!! str_replace("\n","<br>",$test['value']) !!}</th>
                             <td colspan="3">{{array_key_exists($test['id'],$normalValue)?$normalValue[$test['id']]:$test['normal']}}</th>
                            
                         </tr>
                    @endforeach
               @endunless


               @unless (count($liverFunction)<1)
                    <tr>
                        <th colspan="12">HORMONAL PROFILE</th>
                    </tr>
                    <tr>
                         <th colspan="2">Test</th>
                         <th colspan="2">Unit</th>
                         <th colspan="5">Result</th>
                         <th colspan="3">Normal</th>
                    </tr>

                    @foreach ($liverFunction as $test)
                         <tr>
                             <td colspan="2">{{$test['test']}}</th>
                             <td colspan="2">{{$test['unit']}}</th>
                             <td colspan="5">{!! str_replace("\n","<br>",$test['value']) !!}</th>
                             <td colspan="3">{{array_key_exists($test['id'],$normalValue)?$normalValue[$test['id']]:$test['normal']}}</th>
                            
                         </tr>
                    @endforeach
               @endunless


               @unless(count($urinalysis)<1)
                  <tr>
                      <th colspan="12">
                           URINALYSIS
                      </th>
                    </tr>
                         <tr>
                              <th colspan="3">Test</th>
                              <th colspan="3">Result</th>
                              <th colspan="3">Test</th>
                              <th colspan="3">Result</th>
                         </tr>

                         @foreach($urinalysis as $test)
                              <tr *ngFor="let test of urinalysis">
                                  
                                        <td colspan="3">{{$test['column1']['test']}}</td>
                                        <td colspan="3">{{$test['column1']['value']}}</td>
                                   @unless(!array_key_exists('column2',$test))
                                        <td colspan="3">{{ $test['column2']['test'] }}</td>
                                        <td colspan="3">{{$test['column2']['value']}}</td>
                                   @endunless
                              </tr>
                         @endforeach
               @endunless
          
          </tbody>
     </table>
</div>
@endsection
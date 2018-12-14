<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;
use App\Mail\HaematologyReport as HaematologyReportEmail;
use App\Mail\ChemicalPathology as ChemicalPathologyEmail;
use App\Mail\MedicalMicrobiology as MedicalMicrobiologyEmail;
use App\Setting;
use App\ChemicalPathologyNormal, App\HaematologyNormal;
use Illuminate\Support\Facades\DB;


use App\HaematologyReport, App\ChemicalPathology, App\MedicalMicrobiology;
use Illuminate\Support\Facades\Mail;

class ReportsMailSender extends Controller
{
    public static function sendHaematology($id){
        $setting = Setting::find(1);
        
        $report = 	HaematologyReport::with('patient')->where('id',$id)->first();
        $normal = HaematologyNormal::find($id)??[];

        $extraFields = json_decode($report->extra_fields);


        // var_dump(filter_var($report->patient->email, FILTER_VALIDATE_EMAIL));
        try {
            if(filter_var($report->patient->email, FILTER_VALIDATE_EMAIL)){
                $normalValue = [];
                if($normal){
                    $normalValue = json_decode($normal->normal_value,true);
                }

             $reportView = view('reports.haematology',
                [
                    "report"=>$report,
                    "normalValue" => $normalValue ,
                    "extraFields" =>$extraFields,
                    'setting'=>$setting
            ])->render();

            $mpdf = new Mpdf();

            // print  $reportView;

            $mpdf->WriteHTML($reportView);

             // $mpdf->Output();

            $content = $mpdf->Output('', 'S');

            Mail::to($report->patient->email)->send(new HaematologyReportEmail($content,$report->patient));

            // var_dump(Mail::failures());
            if(count(Mail::failures())==0){
                return true;
            }else{
                return false;
            }
        }else{

            return false;
        }
            
        } catch (\Exception $e) {
            print $e->getMessage();
            return false;
        }



        
       

    	


        // print_r(Mail::failures());
		// $mpdf->Output();

		// print $report;

    }


     public static function sendChemicalPathology($id){

        $setting = Setting::find(1);
    	$report = 	ChemicalPathology::with('patient')->where('id',$id)->first();

        $lipidProfile = [];
        $hormonalProfile = [];
        $liverFunction =[];
        $urinalysis = [];


            
            $tests = json_decode(file_get_contents( __DIR__.'/chem-test.txt'),true);

            foreach ($tests as $group=>$test){
                 foreach ($test as $key => $value) {
                     if($report->$key!=''){
                        $tests[$group][$key]['value'] = $report->$key;
                        $tests[$group][$key]['id'] = $key;
                        // var_dump( $tests[$group][$key]);
                        switch ($group) {
                            case 'lipid_profile':
                                 array_push($lipidProfile,$tests[$group][$key]);
                                break;
                            case 'hormonal_profile':
                                 array_push($hormonalProfile,$tests[$group][$key]);
                                break;
                            case 'liver_function':
                                 array_push($liverFunction,$tests[$group][$key]);
                                break;
                            case 'urinalysis':
                                 array_push($urinalysis,$tests[$group][$key]);
                        }
                     }                     
                 }
            }

            // var_dump($urinalysis);

            $urinalysis = ReportsMailSender::divideUrinalysis($urinalysis)??[];
            $normal = ChemicalPathologyNormal::find($id);



            // print_r($urinalysis);

             // print_r($hormonalProfile);

            try {

                    if(filter_var($report->patient->email, FILTER_VALIDATE_EMAIL)){
                         $normalValue  = [];
                        if($normal){
                                $normalValue = json_decode($normal->normal_value,true);
                        }

                    $reportView = view('reports.chemical-pathology',
                        [
                            "report"=>$report,
                            'setting'=>$setting,
                            "lipidProfile"=>$lipidProfile,
                            "hormonalProfile"=>$hormonalProfile,
                            "urinalysis" =>$urinalysis,
                            "liverFunction"=>$liverFunction,
                            "normalValue"=>$normalValue
                        ])->render();

                    $mpdf = new Mpdf();
                    
                    
                    $mpdf->WriteHTML($reportView);

                    // $mpdf->Output();

                    // var_dump(json_decode($normal->normal_value));

                    // print $reportView;
                    $content = $mpdf->Output('', 'S');

                    

                    Mail::to($report->patient)->send(new ChemicalPathologyEmail($content,$report->patient));

                   if(count(Mail::failures())==0){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
                    
            } catch (\Exception $e) {
                print $e->getMessage();
                return false;
            }


		// $mpdf->Output();

		// print $report;
    }



    public static function sendMedicalMicrobiology($id){
      
   		$report = 	MedicalMicrobiology::with('patient')->where('id',$id)->first();

        
       

        if(filter_var($report->patient->email, FILTER_VALIDATE_EMAIL)){

            try {
                    $setting = Setting::find(1);
                    $columns = DB::select('show columns from ' . $report->getTable());


                    $medTest = json_decode(file_get_contents( __DIR__.'/med-test.json'),true);


                    $section1 = false;
                    $hpf = false;
                    $gramstain = false;
                    $semenAnalysis =false;
                    $section2 =false;
                    $stoolMac =false;
                    $section3 = false;
                    $mantouxTest = false;
                    $serologicalTest = false;
                    $znStain = false;
                    $section4 = false;

                    // var_dump($columns);

    
                    foreach ($columns as $value) {
                        $key = $value->Field;

                        // var_dump($value);
                        if($report->$key=='null'){
                           $report->$key = '';
                        }

                        if(array_key_exists($key,$medTest['section1'])){
                             // $key = $medTest['section1'][$key];
                            if($report->$key!=''){
                                $section1 = true;
                            }
                        }

                         if(array_key_exists($key,$medTest['hpf'])){
                            if($report->$key!=''){
                                $hpf = true;
                            }
                        }

                        if(array_key_exists($key,$medTest['gramstain'])){
                            if($report->$key!=''){
                                $gramstain = true;
                            }
                        }


                        if(array_key_exists($key,$medTest['semen_analysis'])){
                            if($report->$key!=''){
                                $semenAnalysis = true;
                            }
                        }

                        if(array_key_exists($key,$medTest['section2'])){
                            if($report->$key!=''){
                                $section2 = true;
                            }
                        }

                        if(array_key_exists($key,$medTest['stool_mac'])){
                            if($report->$key!=''){
                                $stoolMac = true;
                            }
                        }


                        if(array_key_exists($key,$medTest['section3'])){
                            if($report->$key!=''){
                                $section3 = true;
                            }
                        }


                        if(array_key_exists($key,$medTest['section4'])){
                            if($report->$key!=''){
                                $section4 = true;
                            }
                        }

                        if(array_key_exists($key,$medTest['mantoux_test'])){
                            if($report->$key!=''){
                                $mantouxTest = true;
                            }
                        }


                        if(array_key_exists($key,$medTest['serological_test'])){
                            if($report->$key!=''){
                                $serologicalTest = true;
                            }
                        }


                         if(array_key_exists($key,$medTest['zn_stain'])){
                            if($report->$key!=''){
                                $znStain = true;
                            }
                        }
                    }


                    $data['section1'] = $section1;
                    $data['hpf'] = $hpf;
                    $data['semenAnalysis'] = $semenAnalysis;
                    $data['section2']= $section2;
                    $data['stoolMac'] = $stoolMac;
                    $data['section3'] = $section3;
                    $data['mantouxTest'] = $mantouxTest;
                    $data['serologicalTest'] = $serologicalTest;
                    $data['znStain'] = $znStain;
                    $data['section4'] = $section4;
                    $data['report'] = $report;
                    $data['setting'] = $setting;
                    $data['gramstain'] = $gramstain;

                    // var_dump($section1);
                    
                    $reportView = view('reports.medical-microbiology',$data)->render();

                $mpdf = new Mpdf();

                    // var_dump($section1);
                
                // print $reportView;
                
                $mpdf->WriteHTML($reportView);
                 // $mpdf->Output();
                $content = $mpdf->Output('', 'S');

                Mail::to($report->patient)->send(new MedicalMicrobiologyEmail($content,$report->patient));

                if(count(Mail::failures())==0){
                    return true;
                }else{
                    return false;
                }


            } 
            catch (\Exception $e) {
                return false;
            }


        }else{
                return false;
        }
             	
    }






    private static function divideUrinalysis($urinalysis){

        
        $parsed = [];

        $half = ceil(count($urinalysis)/2);

       

        $left = array_slice($urinalysis,0,$half);
        $right = array_slice($urinalysis,$half);


        for($i=0; $i<$half; $i++){
            $row = [];

            $row["column1"] = $left[$i];
           if(count($right)>$i){
                 $row['column2'] = $right[$i];
           }

           array_push($parsed, $row);
        };


        return $parsed;
        
    }
}

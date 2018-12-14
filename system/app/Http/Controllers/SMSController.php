<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HaematologyReport, App\ChemicalPathology, App\MedicalMicrobiology;

class SMSController extends Controller
{


    public function sendHaematology($id)
    {

    	$report = 	HaematologyReport::with('patient')->where('id',$id)->first();

    	if(SMSSender::notifyPatient($report->patient,"Haematology"))
    		return response()->json(["status"=>"success"]);
    	return response()->json(["status"=>"failure"],500);
    }



    public function sendChemical($id)
    {
    	$report = 	ChemicalPathology::with('patient')->where('id',$id)->first();

    	if(SMSSender::notifyPatient($report->patient,"Chemical Pathology"))
    		return response()->json(["status"=>"success"]);
    	return response()->json(["status"=>"failure"],500);
    }


    public function sendMedical($id)
    {
    	$report = 	MedicalMicrobiology::with('patient')->where('id',$id)->first();

    	if(SMSSender::notifyPatient($report->patient,"Medical Microbiology and Parasitology"))
    		return response()->json(["status"=>"success"]);
    	return response()->json(["status"=>"failure"],500);
	}

}

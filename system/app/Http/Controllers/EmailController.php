<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendHaematology($id)
    {
    	if(ReportsMailSender::sendHaematology($id));
    		return response()->json(["status"=>"success"]);
    	return response()->json(["status"=>"failure"],500);
    }
 


    public function sendChemical($id)
    {
    	if(ReportsMailSender::sendChemicalPathology($id))
    		return response()->json(["status"=>"success"]);
    	return response()->json(["status"=>"failure"],500);
    }


    public function sendMedical($id)
    {
    	if(ReportsMailSender::sendMedicalMicrobiology($id))
    		return response()->json(["status"=>"success"]);
    	return response()->json(["status"=>"failure"]);
	}

}
 
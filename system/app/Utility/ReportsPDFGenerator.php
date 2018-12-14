<?php

namespace App\Utitlity;

use Illuminate\Http\Request;
use App\HaematologyReport;



class ReportsPDFGenerator extends Controller
{
    
    

    public static function generateHaemtology($id){
      $report = 	HaematologyReport::with('patient')->where('id',$haematologyReport->id)->first();


      
    }
}

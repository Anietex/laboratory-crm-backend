<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChemicalPathology, App\Patient, App\HaematologyReport,App\MedicalMicrobiology,App\RadiologicalRequest;

class DashboardController extends Controller
{
   

   public function summary()
   {

   	$summary['total']['heamatology'] = HaematologyReport::all()->count();
   	$summary['total']['chemical_pathology'] = ChemicalPathology::all()->count();
   	$summary['total']['medical_microbiology'] = MedicalMicrobiology::all()->count();
   	$summary['total']['patients'] = Patient::all()->count();

     $summary['recent']['heamatology'] = HaematologyReport::orderBy('created_at','desc')->with('patient')->take(5)->get();
     $summary['recent']['chemical_pathology'] = ChemicalPathology::orderBy('created_at','desc')->with('patient')->take(5)->get();
     $summary['recent']['medical_microbiology'] = MedicalMicrobiology::orderBy('created_at','desc')->with('patient')->take(5)->get();






   // $summary['recent']['heamatology'] = HaematologyReport::orderBy('created_at', 'desc')->take(5)->get(['first_name','surname','id','created_at']);
   // 	$summary['recent']['chemical_pathology'] = ChemicalPathology::orderBy('created_at', 'desc')->take(5)->get(['first_name','surname','id','created_at']);
   // 	$summary['recent']['medical_microbiology'] = MedicalMicrobiology::orderBy('created_at', 'desc')->take(5)->get(['first_name','surname','id','created_at']);
   // 	$summary['recent']['radiological_request'] = RadiologicalRequest::orderBy('created_at', 'desc')->take(5)->get(['first_name','surname','id','created_at']);
 


   	return response()->json($summary);
    
   }


   public function login(){

   }


   public function logout(Request $request){

   }
}

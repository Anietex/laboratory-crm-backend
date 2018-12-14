<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\HaematologyReport, App\ChemicalPathology, App\MedicalMicrobiology;
use Illuminate\Support\Facades\DB;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Patient::orderBy('created_at','desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient();
        $fields = $request->input();

        foreach ($fields as $field=>$value){
            $patient->$field = $value;
        }

        $patient->lab_id = 1;

        if($patient->save()){
            return response()->json(['status'=>"success",'message'=>'Patient was saved successfully']);
        }else{
            return response()->json(['status'=>"error",'message'=>'Patient was not saved successfully'],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return response()->json($patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient =  Patient::find($id);
        $fields = $request->input();

        foreach ($fields as $field=>$value){
             if($field=='_method')
                continue;
            $patient->$field = $value;
        }

        $patient->lab_id = 1;

        if($patient->save()){
            return response()->json(['status'=>"success",'message'=>'Patient was updated successfully']);
        }else{
            return response()->json(['status'=>"error",'message'=>'Patient was not updated successfully'],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('haematology_reports')->where('patient_id', '=', $id)->delete();
       DB::table('medical_microbiologies')->where('patient_id', '=', $id)->delete();
       DB::table('chemical_pathologies')->where('patient_id', '=', $id)->delete();


        if(Patient::destroy($id)){
        return response()->json(['status'=>'success']);
       }else{
        return response()->json(['status'=>'error'],500);
       }

    }


    public function patientLog($id){

        $hem = HaematologyReport::where('patient_id',$id)->get(['id','created_at']);

        $chem = ChemicalPathology::where('patient_id',$id)->get(['id','created_at']);

        $med = MedicalMicrobiology::where('patient_id',$id)->get(['id','created_at']);

        $logs = [];

        foreach ($hem as $inves){
            $inves->type = "Haematology";

            $logs[] = $inves;
        }

        foreach ($chem as $inves){
            $inves->type = "Chemical pathology";
            $logs[] = $inves;
        }

        foreach ($med as $inves){
            $inves->type = "Medical Microbiology";
            $logs[] = $inves;
        }


       $logs = collect($logs)->sortByDesc('created_at')->values()->all();

       return response()->json($logs);

    }
}

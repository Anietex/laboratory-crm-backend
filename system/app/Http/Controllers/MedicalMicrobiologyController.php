<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalMicrobiology;

class MedicalMicrobiologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lab = $request->user('api');

        if($lab->admin){
             return response()->json( MedicalMicrobiology::orderBy('created_at','desc')->with('patient')->get());

        }else{
            return response()->json( MedicalMicrobiology::where('lab_id',$lab->id)->orderBy('created_at','desc')->with('patient')->get());

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $lab = $request->user('api');
        
        $report = new MedicalMicrobiology();
        $fields = $request->input();

        foreach ($fields as $field=>$value){
             if($field == 'sms' || $field =='email')
                continue;
            $report->$field = empty($value)?'':$value;
        }

         $report->lab_id = $lab->id;



        if($report->save()){
            $sms = false;
            $email = false;

             if($request->input('email')=="true"){
              $email = ReportsMailSender::sendMedicalMicrobiology($report->id);
           }

          if($request->input('sms')=="true"){
              $sms = SMSSender::notifyPatient($report->patient,"Medical Microbiology and Parasitology");
           }
            return response()->json(['status'=>"success","email"=>$email,"sms"=>$sms,'message'=>'Report was saved successfully' ]);
        }else{
            return response()->json(['status'=>"error",'message'=>'Report was not saved successfully'],500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalMicrobiology $medicalMicrobiology)
    {
      return response()->json(MedicalMicrobiology::with('patient')->where('id',$medicalMicrobiology->id)->take(1)->get()[0]);
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
        $report =  MedicalMicrobiology::find($id);
        $fields = $request->input();

        foreach ($fields as $field=>$value){
            if($field=='_method')
                continue;
            $report->$field = $value;
        }

        if($report->save()){
            return response()->json(['status'=>"success",'message'=>'Report was updated successfully']);
        }else{
            return response()->json(['status'=>"error",'message'=>'Report was not updated successfully'],500);
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
       if(MedicalMicrobiology::destroy($id)){
        return response()->json(['status'=>'success']);
       }else{
        return response()->json(['status'=>'error']);
       }
    }

    
}

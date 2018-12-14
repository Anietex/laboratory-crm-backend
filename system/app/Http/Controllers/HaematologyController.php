<?php

namespace App\Http\Controllers;

use App\HaematologyReport;
use App\HaematologyNormal;
use Illuminate\Http\Request;



class HaematologyController extends Controller
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
           $rows = HaematologyReport::orderBy('created_at','desc')->with('patient')->get();
        }else{
        $rows = HaematologyReport::where('lab_id',$lab->id)->orderBy('created_at','desc')->with('patient')->get();

        }

        return response()->json($rows);
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
         $lab = $request->user('api');
        $report = new HaematologyReport();
        $fields = $request->input();

        foreach ($fields as $field=>$value){
            if($field == 'sms' || $field =='email')
                continue;
            $report->$field = empty($value)?'':$value;
;
        }
         $report->lab_id = $lab->id;




        if($report->save()){


            $sms = false;
            $email = false;
          if($request->input('email')=="true"){
            $email =  ReportsMailSender::sendHaematology($report->id);
          }

          if($request->input('sms')=="true"){
            $sms =  SMSSender::notifyPatient($report->patient,"Haematology");
          }

            return response()->json(['status'=>"success","email"=>$email,"sms"=>$sms,'message'=>'Report was saved successfully']);
        }else{
            return response()->json(['status'=>"error",'message'=>'Report was not saved successfully'],500);
        }




          // return response()->json($request->input('email'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HaematologyReport $haematologyReport)
    {

        $report = HaematologyReport::with('patient')->where('id',$haematologyReport->id)->first();

        $normal = HaematologyNormal::find($haematologyReport->id);

       if($normal){
         $report->normal_value =json_decode($normal->normal_value);
       }else{
         $report->normal_value =json_decode("{}");
       }

      return response()->json($report);
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
        $report = HaematologyReport::find($id);
        $fields = $request->input();

        foreach ($fields as $field=>$value){
            if($field=='_method')
                continue;
            $report->$field = $value;
        }

        // $report->lab_id = 1;

        if($report->save()){
            return response()->json(['status'=>"success",'message'=>'Report was updated successfully', $request->input()]);
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
       if(HaematologyReport::destroy($id)){
        return response()->json(['status'=>'success']);
       }else{
        return response()->json(['status'=>'error'],500);
       }
    }


    private function getFields(Request $request){

    }
}

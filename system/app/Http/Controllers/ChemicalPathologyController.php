<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChemicalPathology,App\ChemicalPathologyNormal;
class ChemicalPathologyController extends Controller
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
            $rows = ChemicalPathology::orderBy('created_at','desc')->with('patient')->get();
         }else{
            $rows = ChemicalPathology::where('lab_id',$lab->id)->orderBy('created_at','desc')->with('patient')->get();

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
       $report = new ChemicalPathology();
        $fields = $request->input();

        foreach ($fields as $field=>$value){

             if($field == 'sms' || $field =='email')
                continue;
            
            $report->$field = empty($value)?'':$value;
        }
         $report->lab_id = $lab->id;

        if($report->save()){
            $email = false;
            $sms = false;


        if($request->input('email')=="true"){
              $email =   ReportsMailSender::sendChemicalPathology($report->id);
          }

          if($request->input('sms')=="true"){
             $sms = SMSSender::notifyPatient($report->patient,"Chemical Pathology");
          }
            return response()->json(['status'=>"success","sms"=>$sms,"email"=>$email,'message'=>'Report was saved successfully']);
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
    public function show(ChemicalPathology $chemicalPathology)
    {

        $report = ChemicalPathology::with('patient')->where('id',$chemicalPathology->id)->first();
        $normal = ChemicalPathologyNormal::find($chemicalPathology->id);

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
        $report = ChemicalPathology::find($id);
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
       if(ChemicalPathology::destroy($id)){
        return response()->json(['status'=>'success']);
       }else{
        return response()->json(['status'=>'error']);
       }
    }


    public function updateNormal(Request $request, $id)
    {
        $result = ChemicalPathologyNormal::updateOrCreate([
            "report_id"=>$id
        ],
        [
            "report_id"=>$id,
            "normal_value"=>$request->normal_value
        ]

    );

        if($result)
            return response()->json(["status"=>"success","normal_value"=>json_decode($result->normal_value)]);
        return response()->json(["status"=>"error"],500);

    }
    
}

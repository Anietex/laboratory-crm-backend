<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RadiologicalRequest;

class RadiologicalRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return response()->json(RadiologicalRequest::orderBy('created_at','desc')->get());
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
        $fields = json_decode($request->input('request_data'),true);
        $radio = new RadiologicalRequest();
       
        foreach ($fields as $field=>$value){
          
            if($field=='investigations')
                $value = json_encode($value);
            $radio->$field = $value;
        }

        if($radio->save()){
            return response()->json(['status'=>"success",'message'=>'Request was saved successfully']);
        }else{
            return response()->json(['status'=>"error",'message'=>'Request was not saved successfully'],500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RadiologicalRequest $radiologicalRequest)
    {
        return response()->json($radiologicalRequest);
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
        $fields = json_decode($request->input('request_data'),true);
        $radio =  RadiologicalRequest::find($id);
       
        foreach ($fields as $field=>$value){
            if($field=='investigations')
                $value = json_encode($value);
            $radio->$field = $value;
        }
        if($radio->save()){
            return response()->json(['status'=>"success",'message'=>'Request was updated successfully']);
        }else{
            return response()->json(['status'=>"error",'message'=>'Request was not updated successfully'],500);
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
       if(RadiologicalRequest::destroy($id)){
        return response()->json(['status'=>'success']);
       }else{
        return response()->json(['status'=>'error']);
       }
    }
}

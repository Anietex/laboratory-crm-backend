<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratory;
use Illuminate\Support\Facades\Hash;

class LaboratoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Laboratory::all());
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
        $request->validate([
            'lab-name'=>'required',
            'location'=>'required',
            'password'=>'required',
            'username'=>'required|unique:laboratories'
        ]);


        $lab = new Laboratory();
        $lab->lab_name = $request->input('lab-name');
        $lab->location = $request->input('location');
        $lab->username = $request->input('username');
        $lab->password =Hash::make($request->input('password'));


        if($lab->save()){
            return response()->json(["status"=>"success","message"=>"lab added"]);
        }else{

            return response()->json(["status"=>"failure","message"=>"lab not added"],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $lab =  Laboratory::find($id);
        $lab->lab_name = $request->input('lab-name');
        $lab->location = $request->input('location');
        $lab->username = $request->input('username');
        $lab->password =Hash::make($request->input('password'));


        if($lab->save()){
            return response()->json(["status"=>"success","message"=>"lab updated"]);
        }else{

            return response()->json(["status"=>"failure","message"=>"lab not updated"],500);
        }
    }


    public function updatePassword(Request $request, $id){
          $lab =  Laboratory::find($id);
          $lab->password =Hash::make($request->input('password'));

        if($lab->save()){
            return response()->json(["status"=>"success","message"=>"password updated"]);
        }else{

            return response()->json(["status"=>"failure","message"=>"password not updated"],500);
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
        if(Laboratory::destroy($id)){
        return response()->json(['status'=>'success']);
       }else{
        return response()->json(['status'=>'error'],500);
       }
    }
}

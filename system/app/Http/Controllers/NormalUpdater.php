<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HaematologyNormal;


class NormalUpdater extends Controller
{
    

    public function updateHaematology(Request $request, $id)
    {
    	

    	$result = HaematologyNormal::updateOrCreate(["report_id"=>$id],
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

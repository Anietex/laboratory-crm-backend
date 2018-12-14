<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    

    public function login(Request $request){
    
    	if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
    		$user = Auth::user('api'); 
            $success['token'] =  $user->createToken('lab_token')->accessToken;
            $success['user'] = $user;
            return response()->json($success,200); 
    	}
    	else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 


    }


    public function logout(Request $request){
        $user = $request->user('api');
        $token = $user->token();
        $token->revoke();
        return response()->json(["status"=>"success"]);
    }
}

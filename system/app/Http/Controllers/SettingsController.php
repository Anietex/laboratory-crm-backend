<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingsController extends Controller
{
   
   public function updateSettings(Request $request){
   	  $setting = Setting::find(1);

   	  $setting->lab_name = $request->input('lab-name');
   	  $setting->sub_name = $request->input('sub-name');
      $setting->phone_no = $request->input('phone-no');
      $setting->email = $request->input('email');
      $setting->address = $request->input('address');
   	  $setting->after_save_action = $request->input('after-save-action');

   	  $fileName = empty($setting->logo_file)?'logo.png':$setting->logo_file;
   	  
   	  if($request->hasFile('logo')){
   	  	$logo = $request->file('logo');
   	  	$ext = $logo->getClientOriginalExtension();
   	  	$fileName = "logo.".$ext;
   	  	$logo->storeAs("images",$fileName,'shared_public');
   	  }

   	  $setting->logo_file = $fileName;

   	  if($setting->save()){

   	  	return response()->json(['status'=>"success","message"=>"settings updated"]);
   	  }else{
   	  	return response()->json(['status'=>"error","message"=>"settings not updated"],500);
   	  }


   }


  public function getSettings(){

  		$setting = Setting::find(1);

  		$setting->logo_file = asset('storage/images/'.$setting->logo_file);

  		return response()->json($setting);


  }



}

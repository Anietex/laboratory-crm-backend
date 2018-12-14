<?php

namespace App\Http\Controllers;
use App\SMS\SMSController;

use App\Setting;
/**
 * 
 */
class SMSSender 
{
	
	
	public static function notifyPatient($patient,$investigation){
		
		try {

			$sms = new SMSController();
			$setting =  Setting::find(1);
			$sms->setSender($setting->lab_name);
			$sms->addRecipient($patient->phone_no);
			$sms->setText("Hello ".$patient->first_name." ".$patient->surname.",   Your $investigation report is ready");
			return $sms->send()->getStatus() == "SUCCESS";
			
		} catch (\Exception $e) {
			return false;
		}
	}


}
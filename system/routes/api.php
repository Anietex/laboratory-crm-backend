<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::patch('laboratories/change-password/{id}',"LaboratoriesController@updatePassword");



Route::post('login', 'AuthController@login');
Route::get('patient/logs/{id}','PatientController@patientLog');


Route::middleware(['auth:api'])->group(function () {
   Route::resource('laboratories','LaboratoriesController');
   Route::resource('patient','PatientController');
   Route::resource('radiological-request','RadiologicalRequestController');
   Route::resource('medical-microbiology','MedicalMicrobiologyController');
	Route::resource('haematology-reports','HaematologyController');
	Route::resource('chemical-pathology','ChemicalPathologyController');
	Route::get('dashboard-summary','DashboardController@summary');
	Route::post('settings/update','SettingsController@updateSettings');
	Route::get('settings','SettingsController@getSettings');

	Route::post('normals/update/haematology/{id}','NormalUpdater@updateHaematology');
	Route::post('normals/update/chemical-pathology/{id}','ChemicalPathologyController@updateNormal');
	
	Route::get('logout','AuthController@logout');


	Route::prefix('mailing')->group(function(){
		Route::post('send-haematology/{id}', 'EmailController@sendHaematology');
		Route::post('send-chemical-pathology/{id}', 'EmailController@sendChemical');
		Route::post('send-medical-microbiology/{id}','EmailController@sendMedical');
	});

	Route::prefix('sms')->group(function(){
		Route::post('send-haematology/{id}', 'SMSController@sendHaematology');
		Route::post('send-chemical-pathology/{id}', 'SMSController@sendChemical');
		Route::post('send-medical-microbiology/{id}','SMSController@sendMedical');
	});

});



Route::prefix('mailing')->group(function(){
		Route::post('send-haematology/{id}', 'EmailController@sendHaematology');
		Route::post('send-chemical-pathology/{id}', 'EmailController@sendChemical');
		Route::post('send-medical-microbiology/{id}','EmailController@sendMedical');
	});

Route::get('settings','SettingsController@getSettings');






Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

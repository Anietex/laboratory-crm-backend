<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Setting;


class MedicalMicrobiology extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
   public function __construct($reportFile,$patient)
    {
       $this->reportFile = $reportFile;
       $this->patient = $patient;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
         $setting = Setting::find(1);
         return $this
         ->from("dev@springlight.com",$setting->lab_name)
         ->view('report-email')
         ->with(['name'=>$this->patient->first_name." ".$this->patient->surname,"setting"=>$setting])
         ->attachData($this->reportFile, $setting->lab_name.' Medical Microbiology report.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}

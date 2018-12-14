<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class HaematologyReport extends Model
{
   public function patient()
   {
   	   return $this->belongsTo('App\Patient');
   }

   
}

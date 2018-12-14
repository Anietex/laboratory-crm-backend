<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChemicalPathologyNormal extends Model
{
   protected $primaryKey  = "report_id";
    public $incrementing = false;
    protected $fillable = ['report_id','normal_value'];
    public $timestamps = false;
}

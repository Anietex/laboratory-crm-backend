<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadiologicalRequest extends Model
{
    public function getInvestigationsAttribute($value)
    {
        return json_decode($value);
    }
}

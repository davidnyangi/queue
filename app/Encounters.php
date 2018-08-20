<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encounters extends Model
{
    
       	protected $table = 'OC_ENCOUNTERS';
       	protected $casts = [
        'OC_ENCOUNTER_BEGINDATE' => 'date'
    	];
	    protected $dates = [
	        'OC_ENCOUNTER_BEGINDATE'
	    ];
}

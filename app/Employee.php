<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function passport()
    {
    	return $this->hasOne(Passport::class);
    	// $passport = Employee::find(1)->passport;
    	
    }
}

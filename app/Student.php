<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function mobile()
    {
    	// return $this->hasOne(Mobile::class);
    	return $this->hasMany(Mobile::class);
    }
}

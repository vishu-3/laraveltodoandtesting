<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public function works()
	{
    	return $this->hasManyThrough(Work::class,Worker::class);
		
	}
}

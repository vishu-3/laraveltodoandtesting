<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    public function blogimage()
    {
    	return $this->morphOne('App\Blogimage','blogimageable');
    }
}

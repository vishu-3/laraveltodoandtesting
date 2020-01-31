<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogimage extends Model
{
    public function blogimageable()
    {
    	return $this->morphTo();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tpost extends Model
{
    public function ttags()
    {
    	return $this->morphToMany('App\Ttag','ttaggable');
    }
}

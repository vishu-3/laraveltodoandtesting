<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class Test4Controller extends Controller
{
    public function index()
    {
    	$work = Country::find(1)->works;
    	return $work;
    }
}

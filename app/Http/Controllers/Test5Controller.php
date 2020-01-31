<?php

namespace App\Http\Controllers;

use App\Blogimage;
use App\Blogpost;
use Illuminate\Http\Request;

class Test5Controller extends Controller
{
    public function index()
    {
    	$blogpost = Blogpost::find(2)->blogimage;
    	return $blogpost;

    	// $blogimage = Blogimage::find(2)->blogimageable;
    	// return $blogimage;
    }
}

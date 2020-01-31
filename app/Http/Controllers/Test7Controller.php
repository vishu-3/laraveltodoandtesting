<?php

namespace App\Http\Controllers;

use App\Tpost;
use App\Tvideo;
use Illuminate\Http\Request;

class Test7Controller extends Controller
{
    public function index()
    {
    	// $post = Tpost::first();
    	// return $post = Tpost::first()->ttags;
    	return Tpost::first()->ttags;
    	
    	// $post = Tpost::find(2);
    	// return 	$post->ttags;

    	// $video = Tvideo::find(2);
    	// return $video->ttags;
    }
}

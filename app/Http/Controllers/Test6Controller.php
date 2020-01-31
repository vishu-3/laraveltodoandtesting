<?php

namespace App\Http\Controllers;

use App\Post;
use App\Video;
use Illuminate\Http\Request;

class Test6Controller extends Controller
{
    public function index()
    {
    	// $post = Post::find(1)->comments;
    	// return $post;
    	$video = Video::find(1)->comments;
    	return $video;
    }
}

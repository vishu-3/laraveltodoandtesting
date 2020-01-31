<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Pagination extends Controller
{
    public function users()
    {
    	// $users = User::all();
    	$users = User::paginate(5);
    	return view('pagination',compact('users'));
    }
}

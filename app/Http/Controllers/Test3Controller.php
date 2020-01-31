<?php

namespace App\Http\Controllers;

use App\Role;
// use App\Webuser;
use Illuminate\Http\Request;

class Test3Controller extends Controller
{
   public function index()
   {
   		// $role = Webuser::find(1)->roles;  
   		// // dd($role);
   		// return $role;
   		$user = Role::find(2)->users;
   		return $user;
   }
}

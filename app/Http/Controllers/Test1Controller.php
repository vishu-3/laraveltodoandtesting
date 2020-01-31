<?php

namespace App\Http\Controllers;

// use App\Employee;
use App\Passport;
use Illuminate\Http\Request;

class Test1Controller extends Controller
{
    public function index()
    {
    	 // $passport = Employee::find(1)->passport;
    	 // dd($passport);
    	 // var_dump($passport);
    	$employee = Passport::find(2)->employee;
    	 dd($employee);
    }
}

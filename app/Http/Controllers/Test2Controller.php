<?php

namespace App\Http\Controllers;

// use App\Mobile;
use App\Student;
use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    public function index()
    {
    	$student = Student::find(1)->mobile;
    	dd($student);
  //   	$mobile = Mobile::find(1)->student;
		// dd($mobile);    
    }
}

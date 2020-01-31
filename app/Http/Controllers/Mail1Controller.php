<?php

namespace App\Http\Controllers;

use App\Mail\Mailtrap1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Mail1Controller extends Controller
{
    public function index()
    {
    	Mail::to('vishal.upare@gmail.com')->send(new Mailtrap1());
    }
}

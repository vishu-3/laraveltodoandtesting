<?php

namespace App\Http\Controllers;

use App\Mail\Mailtrap2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Mail2Controller extends Controller
{
    public function send()
    {
    	Mail::send(new Mailtrap2());
    }
}

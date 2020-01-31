<?php

namespace App\Mail;

use App\Banker;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        $user = Banker::find(1);
        // return $this->view('mail',['msg1' => $request->msg1])->to($request->to);
        return $this->view('mail',['name' => $user->name])->to($user->email);
    }
}

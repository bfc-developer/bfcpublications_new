<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HRcareerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $hrData;
    public $filename;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($hrData,$filename){
        
       $this->hrData = $hrData;
       $this->filename = $filename;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.hr_mail_view')->attach($this->filename);
    }
}
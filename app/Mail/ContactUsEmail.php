<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $formdata;
    public $formdata1;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $formdata, $formdata1)
    {
        $this->formdata = $formdata;
        $this->formdata1 = $formdata1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact_us');
    }
}

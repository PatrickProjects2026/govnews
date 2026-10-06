<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InternalEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        // return $this->subject('Internal Notification')
        //             ->view('emails.internal_email');


        return $this->from('info@gautenggov.com', 'Gauteng Government Online™ ')
                    ->subject('Message from Gauteng Government Online™ ')
                    ->view('emails.internal_email')
                    ->with('details', $this->details);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailVerify extends Mailable
{
    use Queueable, SerializesModels;

    public $emails;
    public $senderName;
    public $otp;

    /**
     * Create a new message instance.
     */
    public function __construct($emails, $senderName,$otp)
    {
        $this->emails = $emails;
        $this->senderName = $senderName;
        $this->otp = $otp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->emails)
                    ->from('med.developper00@gmail.com', $this->senderName)
                    ->subject('Merci de verifier votre compte pour utiliser la plateforme')
                    ->view('emails.emailverify');
    }
}

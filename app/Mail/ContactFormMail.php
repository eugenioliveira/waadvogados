<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Requests\SendContactForm;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Os dados recebidos do formulário de contato.
     * 
     * @var array
     */
    public $contactFormRequest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(SendContactForm $request)
    {
        $this->contactFormRequest = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Formulário de Contato do Site')->markdown('emails.contact');
    }
}

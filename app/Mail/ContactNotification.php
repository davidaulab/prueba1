<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;
    /*
    */

    public string $email;
    public string $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailClase, $messageClase)
    {
        //
        $this->email = $emailClase;
        $this->message = $messageClase;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Desde aquí se envía el email
        
        return $this->from ($this->email)->subject ('Nuevo contacto desde la web')->markdown ('emails.contact');
    }
}

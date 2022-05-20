<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfimationUser extends Mailable
{
    use Queueable, SerializesModels;
    public $dataa;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataa)
    {
        $this->dataa =$dataa;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@lepalaisdesfemmes.com', 'Confirmation User by Admin')
            ->view('mail')
            ->subject('Confirmation User by Admin')
            ->with('dataa', $this->dataa);

    }
}

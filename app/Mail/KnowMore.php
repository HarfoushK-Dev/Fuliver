<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KnowMore extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $dataRecieved;

    public function __construct($data)
    {
        $this->dataRecieved = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->dataRecieved['form_email'], $this->dataRecieved['form_email'])
            ->subject('Fuliver Know More From: '. $this->dataRecieved['form_email'])
            ->view('knowmoreTemplate');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BronEmailClass extends Mailable
{
    use Queueable, SerializesModels;
    protected $bronData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($bronData)
    {
        $this->bronData = $bronData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('fsc2023@proton.me', 'RENTAL SERVICES MMC')
            ->subject('Avtomobil rezervi')
            ->view('admin.mail.accepted')
            ->with(['bronData' => $this->bronData]);
    }
}

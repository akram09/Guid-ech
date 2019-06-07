<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class contactus extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *  @author Madani Yousfi Abdelwahed 
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *  @author Madani yousfi Abdelwahed
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}

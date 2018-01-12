<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Anmeldung extends Mailable
{
    use Queueable, SerializesModels;

    /* Properties */

    public $name;
    public $teilnahmestatus;
    public $kommentar;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, string $teilnahmestatus, string $kommentar)
    {
        $this->name = $name;
        $this->teilnahmestatus = $teilnahmestatus;
        $this->kommentar = $kommentar;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('emails.anmeldung')
            ->text('emails.anmeldung-text');
    }
}

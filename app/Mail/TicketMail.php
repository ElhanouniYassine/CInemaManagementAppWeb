<?php
// app/Mail/TicketMail.php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TicketMail extends Mailable
{
    use Queueable, SerializesModels;

    public $ticketData;

    public function __construct($ticketData)
    {
        $this->ticketData = $ticketData;
    }

    public function build()
    {
        return $this->view('ticketform')
                    ->with('ticketData', $this->ticketData);
    }
}

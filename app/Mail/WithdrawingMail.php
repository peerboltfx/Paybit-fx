<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class WithdrawingMail extends Mailable
{
    use Queueable, SerializesModels;
    public $detail;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct($detail)
    {
       
        $this-> $detail = $detail ;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Payment in progress')->view('email.Withdrawal');
    }
}

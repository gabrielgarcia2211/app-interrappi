<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationsEmail extends Mailable
{
    use Queueable, SerializesModels;


    /** 
     * The demo object instance. 
     * 
     * @var Data 
     */
    public $data;
    
    /** 
     * Create a new message instance. 
     * 
     * @return void 
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('notification.requests');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\OrderShipped;
use App\Order;
use App\Order_product;


class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    // public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $data)
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
        return $this->markdown('emails.order.ordershipped')->with('data',$this->data);
    }
}

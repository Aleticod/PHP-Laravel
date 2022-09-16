<?php

namespace App\Mail;
use App\Gasto;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResumenReporte extends Mailable
{
    use Queueable, SerializesModels;
    private $gasto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Gasto $gasto)
    {
        $this->gasto = $gasto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.resumen', ['gasto'=>$this->gasto]);
    }
}

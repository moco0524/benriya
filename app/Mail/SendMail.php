<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $telno, $zipno, $mailadd, $kinkyu, $message, $accept)
    {
        $this->name = $name;
        $this->telno = $telno;
        $this->zipno = $zipno;
        $this->email = $mailadd;
        $this->kinkyu = $kinkyu;
        $this->message = $message;
        $this->accept = $accept;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->email)
            ->subject('問い合わせメール')
            ->view('test.email')
            ->with([
                'name' => $this->name,
                'telno' => $this->telno,
                'zipno' => $this->zipno,
                'kinkyu' => $this->kinkyu,
                'message' => $this->message,
                'accept' => $this->accept,
                
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $telno, $zipno, $address, $email, $kinkyu, $message)
    {
        $this->name = $name;
        $this->telno = $telno;
        $this->zipno = $zipno;
        $this->address = $address;
        $this->email = $email;
        $this->kinkyu = $kinkyu;
        $this->message = $message;
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
            ->view('pages.register_mail')
            ->with(['name' => $this->name,
                        'telno' => $this->telno,
                        'zipno' => $this->zipno,
                        'address' => $this->address,
                        'kinkyu' => $this->kinkyu,
                        'body' => $this->message,
                        'val1' => "",
                        'val2' => ""]);
    }
}

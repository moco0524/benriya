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
    public function __construct($name, $telno, $zipno, $address, $email, $kinkyu, $message, $page)
    {
        $this->name = $name;
        $this->telno = $telno;
        $this->zipno = $zipno;
        $this->address = $address;
        $this->email = $email;
        $this->kinkyu = $kinkyu;
        $this->message = $message;
        $this->page = $page;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        switch ($this->page) {
        case 'fuyohin':
            $page = "不用品処分";
            break;
        case 'souji':
            $page = "庭掃除";
            break;
        case 'ihin':
            $page = "遺品整理";
            break;
        case 'support':
            $page = "引越し";
            break;
        case 'moving':
            $page = "家具移動";
            break;
        case 'daiku':
            $page = "日曜大工";
            break;
        case 'kaitori':
            $page = "家電買取";
            break;
        case 'daikou':
            $page = "各種代行";
            break;
        default:
            $page = "その他";
        }

        $to = array( 'benriya.clean.info@gmail.com' , 'benriya.clean.mng@gmail.com' );

        return $this
            ->subject( '問い合わせメール [ ' . $page . ' ]' )
            ->to( $to, '便利屋クリーン' )
            ->view('pages.register_mail')
            ->with(['name' => $this->name,
                        'telno' => $this->telno,
                        'zipno' => $this->zipno,
                        'address' => $this->address,
                        'mailadd' => $this->email,
                        'kinkyu' => $this->kinkyu,
                        'body' => $this->message]);
    }
}

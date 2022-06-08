<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
    	$name = $request['name'];
    	$telno = $request['telno'];
    	$zipno = $request['zipno'];
    	$email = $request['email'];
    	$kinkyu = $request['kinkyu'];
    	$message = $request['message'];
    	$accept = $request['accept'];
    	
    	Mail::send('/contact', [
    	    'name' => $name,
    	    'telno' => $telno,
    	    'zipno' => $zipno,
    	    ], function ($message) use ($email) {
    	        $message->to($email)
    	            ->subject('テストメール');
    	    });
//    	Mail::send(new SendMail($name, $telno, $zipno, $email, $kinkyu, $message, $accept));
    	
    	return view('/top');
    }
}

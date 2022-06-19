<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class RegisterController extends Controller
{
    public function register(Request $request, string $place='', string $page='') {
        $val1 = $place;
        $val2 = $page;
        
    	$name = $request['name'];
    	$telno = $request['telno'];
    	$zipno = $request['zipno'];
    	$address = $request['address'];
    	$email = $request['email'];
    	$kinkyu = $request['kinkyu'];
    	$message = $request['message'];
    	
    	Mail::send(new ContactMail($name, $telno, $zipno, $address, $email, $kinkyu, $message));
    	return view('pages.thanks', compact( 'val1', 'val2' ) );
	}
}
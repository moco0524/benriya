<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class RegisterController extends Controller
{
//    public function register(Request $request, string $place='', string $page='') {
    public function register(Request $request) {
//        $val1 = $place;
//        $val2 = $page;
        
    	$name = $request['your-name'];
    	$telno = $request['tel-492'];
    	$zipno = $request['add-num'];
    	$address = $request['your-email'];
    	$email = $request['your-email'];
    	$kinkyu = $request['kinkyu'];
    	$message = $request['your-message'];
    	
    	Mail::send(new ContactMail($name, $telno, $zipno, $address, $email, $kinkyu, $message));
//    	return view('pages.thanks', compact( 'val1', 'val2' ) );
    	return view('pages.thanks');
	}
}
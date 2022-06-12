<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;

class RegisterController extends Controller
{
    public function register(Request $request) {
    	$name = $request['name'];
    	
    	Mail::send(new RegisterMail($name));
    	return view('pages.contact');
	}
}
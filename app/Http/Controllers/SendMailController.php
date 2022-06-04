<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    public function register(Request $request) {
        $name = $request['name'];

        Mail::send(new SendMail($name));
        return view('registers.index');
    }
}

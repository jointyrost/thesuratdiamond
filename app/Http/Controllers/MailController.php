<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ContactMailSuccessfull;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactMail(Request $request)
    {

        // $name = $request->input('name');
        $email = $request->input('email');
        // $phone = $request->input('phone');
        // $message = $request->input('message');

        // Collect the data
        $data = $request->only('name', 'phone', 'email', 'message');

        // Send email to the admin
        Mail::to('contact@thesuratdiamond.com')->send(new ContactMail($data));
        Mail::to($email)->send(new ContactMailSuccessfull($data));


        return redirect()->back()->with(['success' => 'successfully send your contact mail']);
    }
}

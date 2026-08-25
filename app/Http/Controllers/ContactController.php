<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        Mail::to(config('mail.from.address'))->send(new ContactMessage(
            senderName: $request->validated('name'),
            senderEmail: $request->validated('email'),
            messageBody: $request->validated('message'),
        ));

        return back()->with('contact_sent', true);
    }
}

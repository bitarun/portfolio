<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        // Honeypot filled in: pretend everything worked, send nothing.
        if ($request->filled('website')) {
            return redirect(route('home') . '#contact')->with('contact_sent', true);
        }

        try {
            Mail::to(config('portfolio.contact_email'))->send(new ContactMessage(
                senderName: $request->validated('name'),
                senderEmail: $request->validated('email'),
                messageBody: $request->validated('message'),
            ));
        } catch (Throwable $e) {
            report($e);

            return redirect(route('home') . '#contact')
                ->withInput($request->only('name', 'email', 'message'))
                ->with('contact_failed', true);
        }

        return redirect(route('home') . '#contact')->with('contact_sent', true);
    }
}

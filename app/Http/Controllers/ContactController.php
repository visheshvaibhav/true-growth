<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Handle the contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'service' => 'required|string|max:255',
            'budget' => 'nullable|string|max:255',
            'timeline' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
            'newsletter' => 'nullable|boolean',
        ]);

        // Store the form submission
        FormSubmission::create([
            'form_type' => FormSubmission::TYPE_CONTACT,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'company' => $validated['company'],
            'service' => $validated['service'],
            'budget' => $validated['budget'],
            'timeline' => $validated['timeline'],
            'message' => $validated['message'],
            'newsletter_subscription' => $request->boolean('newsletter'),
        ]);

        // Here you would typically send an email notification
        // Mail::to('admin@example.com')->send(new ContactFormSubmitted($validated));
        
        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}

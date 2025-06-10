<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Handle the newsletter subscription.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function subscribe(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        // Store the newsletter subscription
        FormSubmission::create([
            'form_type' => FormSubmission::TYPE_NEWSLETTER,
            'email' => $validated['email'],
            'newsletter_subscription' => true,
        ]);

        return response()->json([
            'message' => 'Thank you for subscribing to our newsletter!'
        ]);
    }
} 
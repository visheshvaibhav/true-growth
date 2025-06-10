<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use Illuminate\Http\Request;

class ServiceInquiryController extends Controller
{
    /**
     * Handle the service inquiry form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'project_type' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:5000',
            'service' => 'required|string|max:255',
        ]);

        // Store the form submission
        FormSubmission::create([
            'form_type' => FormSubmission::TYPE_SERVICE,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'company' => $validated['company'],
            'phone' => $validated['phone'],
            'project_type' => $validated['project_type'],
            'message' => $validated['message'],
            'service' => $validated['service'],
            'additional_data' => $request->except([
                'name', 'email', 'company', 'phone', 'project_type', 'message', 'service', '_token'
            ]),
        ]);

        return response()->json([
            'message' => 'Thank you for your inquiry. We will get back to you soon!'
        ]);
    }
} 
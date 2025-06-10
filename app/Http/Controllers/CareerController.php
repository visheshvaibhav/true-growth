<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $departments = Job::where('status', 'published')
            ->distinct()
            ->pluck('department');

        $jobs = Job::where('status', 'published')
            ->when($request->department, function ($query, $department) {
                return $query->where('department', $department);
            })
            ->latest()
            ->paginate(10);

        return view('pages.careers.index', compact('departments', 'jobs'));
    }

    public function show(Job $job)
    {
        abort_if($job->status !== 'published', 404);

        $similarJobs = Job::where('status', 'published')
            ->where('id', '!=', $job->id)
            ->where(function ($query) use ($job) {
                $query->where('department', $job->department)
                    ->orWhere('type', $job->type);
            })
            ->limit(3)
            ->get();

        return view('pages.careers.show', compact('job', 'similarJobs'));
    }

    public function apply(Request $request, Job $job)
    {
        abort_if($job->status !== 'published', 404);

        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
            'cover_letter' => 'nullable|string|max:5000',
            'linkedin' => 'nullable|url|max:255',
            'portfolio' => 'nullable|url|max:255',
        ]);

        // Store the resume file
        $resumePath = $request->file('resume')->store('resumes', 'private');

        // Create the job application
        $application = JobApplication::create([
            'job_id' => $job->id,
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'resume_path' => $resumePath,
            'cover_letter' => $validated['cover_letter'],
            'linkedin_url' => $validated['linkedin'],
            'portfolio_url' => $validated['portfolio'],
            'status' => 'new',
        ]);

        return redirect()
            ->route('careers.show', $job)
            ->with('success', 'Your application has been submitted successfully! We will review it and get back to you soon.');
    }
} 
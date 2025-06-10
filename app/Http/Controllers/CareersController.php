<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareersController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::query()->where('is_active', true);

        if ($request->has('department')) {
            $query->where('department', $request->department);
        }

        $jobs = $query->latest()->paginate(10);
        $departments = Job::where('is_active', true)
            ->distinct()
            ->pluck('department')
            ->filter();

        return view('pages.careers.index', [
            'jobs' => $jobs,
            'departments' => $departments,
        ]);
    }

    public function show(string $slug)
    {
        $job = Job::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $similarJobs = Job::where('id', '!=', $job->id)
            ->where('is_active', true)
            ->where(function ($query) use ($job) {
                $query->where('department', $job->department)
                    ->orWhere('type', $job->type);
            })
            ->take(3)
            ->get();

        return view('pages.careers.show', [
            'job' => $job,
            'similarJobs' => $similarJobs,
        ]);
    }

    public function apply(Request $request, string $slug)
    {
        $job = Job::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'cover_letter' => 'nullable|string',
            'linkedin' => 'nullable|url|max:255',
            'portfolio' => 'nullable|url|max:255',
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Split full name into first and last name
        $nameParts = explode(' ', $validated['full_name'], 2);
        $firstName = $nameParts[0];
        $lastName = isset($nameParts[1]) ? $nameParts[1] : '';

        $application = new JobApplication([
            'job_id' => $job->id,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'cover_letter' => $validated['cover_letter'],
            'resume_path' => $resumePath,
            'linkedin_url' => $validated['linkedin'],
            'portfolio_url' => $validated['portfolio'],
            'status' => 'pending',
        ]);

        $application->save();

        return back()->with('success', 'Your application has been submitted successfully!');
    }
}

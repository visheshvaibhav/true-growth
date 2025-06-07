<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaseStudy;

class WorkController extends Controller
{
    /**
     * Display the main work/portfolio page
     */
    public function index()
    {
        // Get all case studies, grouped by category
        $caseStudies = CaseStudy::all()->groupBy('category');
        
        return view('pages.work', [
            'caseStudies' => $caseStudies,
            'categories' => [
                'AI & Machine Learning',
                'Web Development',
                'Process Automation',
                'Digital Marketing'
            ]
        ]);
    }

    /**
     * Display a specific case study
     */
    public function show($slug)
    {
        $caseStudy = CaseStudy::where('slug', $slug)
            ->with(['technologies', 'processSteps', 'keyMetrics', 'testimonial', 'relatedProjects'])
            ->firstOrFail();

        return view('pages.case-study', [
            'caseStudy' => $caseStudy
        ]);
    }
} 
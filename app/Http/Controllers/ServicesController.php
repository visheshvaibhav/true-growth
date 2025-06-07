<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display the services listing page.
     */
    public function index()
    {
        return view('pages.services.index');
    }

    /**
     * Display a specific service page.
     */
    public function show($service)
    {
        // Validate if service exists
        $validServices = ['enterprise-ai', 'web-development', 'digital-marketing'];
        
        if (!in_array($service, $validServices)) {
            abort(404);
        }

        return view("pages.services.{$service}");
    }
}

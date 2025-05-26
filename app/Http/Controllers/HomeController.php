<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $services = Service::where('is_featured', true)->take(6)->get();
        $testimonials = Testimonial::where('is_featured', true)->take(3)->get();
        
        return view('home', compact('services', 'testimonials'));
    }
}
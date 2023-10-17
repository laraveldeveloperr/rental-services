<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::where('status', 1)->get();
        return view('frontend.services.index', compact('services'));
    }

    public function show($slug)
    {
        $services = Services::where('status', 1)->get();
        $service = Services::whereTranslation('slug', $slug)->first();
        return view('frontend.services.show', compact('services', 'service'));
    }
}

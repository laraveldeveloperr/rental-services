<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettings;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('frontend.about.index');
    }

    public function privacy_policy()
    {
        return view('frontend.about.privacy-policy');
    }
}

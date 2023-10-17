<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blogs::where('status', 1)->paginate(10);
        return view('frontend.blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blogs::whereTranslation('slug', $slug)->first();
        $blogs = Blogs::where('status', 1)->get();
        return view('frontend.blogs.show', compact('blog', 'blogs'));
    }
}

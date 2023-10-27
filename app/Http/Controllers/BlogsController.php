<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blogs;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blogs::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blogs;
        $blog->fill($request->data);
        if ($request->file('image')) {
            $blog_image = $request->file('image');
            $newimageName = $blog_image->getClientOriginalName();
            $blog_image->move(public_path('images/blogs'), $newimageName);
            $blog->image = $newimageName;
        }
        $blog->status = $request->status;
        $blog->save();

        toast('Bloq müvəffəqiyyətlə əlavə edildi', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->fill($request->data);
        if ($request->file('image')) {
            $oldimage = $blog->image;
            $blog_image = $request->file('image');
            $newimageName = $blog_image->getClientOriginalName();
            $blog_image->move(public_path('images/blogs'), $newimageName);
            $blog->image = $newimageName;
            if ($oldimage && file_exists(public_path('images/blogs/' . $oldimage))) {
                unlink(public_path('images/blogs/' . $oldimage));
            }
        }
        $blog->status = $request->status;
        $blog->save();

        toast('Bloq məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->delete();
        toast('Bloq müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}
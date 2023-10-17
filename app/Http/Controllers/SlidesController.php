<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slides;
use Illuminate\Http\Request;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slides::all();
        return view('admin.settings.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slide = new Slides;
        $slide->fill($request->data);
        if ($request->file('image')) {
            $slide_image = $request->file('image');
            $slide_image->move(public_path('images/slides'), $slide_image->getClientOriginalName());
            $slide_image = $slide_image->getClientOriginalName();
            $slide->image = $slide_image;
        }
        $slide->status = $request->status;
        $slide->save();

        toast('Slayd müvəffəqiyyətlə əlavə edildi', 'success');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slides::findOrFail($id);
        return view('admin.settings.slides.edit', compact('slide'));
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
        $slide = Slides::findOrFail($id);
        $slide->fill($request->data);
        if ($request->file('image')) {
            $oldimage = $slide->image;
            $slide_image = $request->file('image');
            $newimageName = $slide_image->getClientOriginalName();
            $slide_image->move(public_path('images/slides'), $newimageName);
            $slide->image = $newimageName;
            if ($oldimage && file_exists(public_path('images/slides/' . $oldimage))) {
                unlink(public_path('images/slides/' . $oldimage));
            }
        }
        $slide->status = $request->status;
        $slide->save();

        toast('Slayd müvəffəqiyyətlə əlavə edildi', 'success');
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
        $slide = Slides::findOrFail($id);
        $slide->delete();
        toast('Slayd müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

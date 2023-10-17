<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Services;
        $service->fill($request->data);
        if ($request->file('image')) {
            $service_image = $request->file('image');
            $service_image->move(public_path('images/services'), $service_image->getClientOriginalName());
            $service_image = $service_image->getClientOriginalName();
        }
        $service->image = $service_image;
        $service->status = $request->status;
        $service->save();

        toast('Servis müvəffəqiyyətlə əlavə edildi', 'success');
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
        $service = Services::findOrFail($id);
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::findOrFail($id);
        return view('admin.services.edit', compact('service'));
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
        $service = Services::findOrFail($id);
        $service->fill($request->data);
        if ($request->file('image')) {
            $oldimage = $service->image;
            $service_image = $request->file('image');
            $newimageName = $service_image->getClientOriginalName();
            $service_image->move(public_path('images/services'), $newimageName);
            $service->image = $newimageName;
            if ($oldimage && file_exists(public_path('images/services/' . $oldimage))) {
                unlink(public_path('images/services/' . $oldimage));
            }
        }
        $service->status = $request->status;
        $service->save();

        toast('Servis müvəffəqiyyətlə əlavə edildi', 'success');
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
        $service = Services::findOrFail($id);
        $service->delete();
        toast('Servis müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

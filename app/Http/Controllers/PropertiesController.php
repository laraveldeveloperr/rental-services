<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Properties::all();
        return view('admin.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Properties::rules());
        $properties = new Properties;
        $properties->name = $request->name;
        $properties->slug = Str::slug($request->name);
        $properties->status = $request->status;
        $properties->save();

        toast('Maşın özəllikləri müvəffəqiyyətlə əlavə edildi', 'success');
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
        $property = Properties::findOrFail($id);
        return view('admin.properties.edit', compact('property'));
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
        $this->validate($request,Properties::rules());
        $property = Properties::findOrFail($id);
        $property->name = $request->name;
        $property->slug = Str::slug($request->name);
        $property->status = $request->status;
        $property->save();

        toast('Maşın özəllikləri məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $property = Properties::findOrFail($id);
        $property->delete();
        toast('Maşın özəllikləri müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

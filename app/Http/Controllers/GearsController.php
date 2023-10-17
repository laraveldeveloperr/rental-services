<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gears;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GearsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gears = Gears::withCount('cars')->get();
        return view('admin.gears.index', compact('gears'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gears.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Gears;
        $type->fill($request->data);
        $type->status = $request->status;
        $type->save();

        toast('Ötürücü müvəffəqiyyətlə əlavə edildi', 'success');
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
        $gear = Gears::findOrFail($id);
        return view('admin.gears.edit', compact('gear'));
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
        $type = Gears::findOrFail($id);
        $type->fill($request->data);
        $type->status = $request->status;
        $type->save();

        toast('Ötürücü məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $gear = Gears::findOrFail($id);
        $gear->delete();
        toast('Ötürücü müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

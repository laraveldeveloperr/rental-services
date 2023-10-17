<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Engines;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EnginesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engines = Engines::withCount('cars')->get();
        return view('admin.engines.index', compact('engines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.engines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $engine = new Engines;
        $engine->fill($request->data);
        $engine->status = $request->status;
        $engine->save();

        toast('Mator həcmi müvəffəqiyyətlə əlavə edildi', 'success');
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
        $engine = Engines::findOrFail($id);
        return view('admin.engines.edit', compact('engine'));
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
        $type = Engines::findOrFail($id);
        $type->fill($request->data);
        $type->status = $request->status;
        $type->save();
        
        toast('Mator həcmi məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $fuel = Engines::findOrFail($id);
        $fuel->delete();
        toast('Mator həcmi müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

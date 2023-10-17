<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fuels;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FuelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuels = Fuels::withCount('cars')->get();
        return view('admin.fuels.index', compact('fuels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fuels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Fuels;
        $type->fill($request->data);
        $type->status = $request->status;
        $type->save();

        toast('Yanacaq növü müvəffəqiyyətlə əlavə edildi', 'success');
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
        $fuel = Fuels::findOrFail($id);
        return view('admin.fuels.edit', compact('fuel'));
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
        $type = Fuels::findOrFail($id);
        $type->fill($request->data);
        $type->status = $request->status;
        $type->save();

        toast('Yanacaq növü məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $fuel = Fuels::findOrFail($id);
        $fuel->delete();
        toast('Yanacaq növü müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

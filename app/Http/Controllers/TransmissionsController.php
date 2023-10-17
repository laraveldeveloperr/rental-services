<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transmissions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransmissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Transmissions::withCount('cars')->get();
        return view('admin.transmissions.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transmissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Transmissions;
        $type->fill($request->data);
        $type->status = $request->status;
        $type->save();

        toast('Sürət qutusu müvəffəqiyyətlə əlavə edildi', 'success');
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
        $item = Transmissions::findOrFail($id);
        return view('admin.transmissions.edit', compact('item'));
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
        $type = Transmissions::findOrFail($id);
        $type->fill($request->data);
        $type->status = $request->status;
        $type->save();

        toast('Sürət qutusu məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $item = Transmissions::findOrFail($id);
        $item->delete();
        toast('Sürət qutusu müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

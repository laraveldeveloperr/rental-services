<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BanTypes;
use App\Models\Brands;
use Illuminate\Http\Request;

class BanTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = BanTypes::withCount('cars')->get();
        return view('admin.ban-types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ban-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new BanTypes;
        $type->fill($request->data);
        $type->status = $request->status;
        $type->save();

        toast('Ban növü müvəffəqiyyətlə əlavə edildi', 'success');
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
        $type = BanTypes::findOrFail($id);
        return view('admin.ban-types.edit', compact('type'));
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
        $type = BanTypes::findOrFail($id);
        $type->fill($request->data);
        $type->status = $request->status;
        $type->save();

        toast('Ban növü məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $type = BanTypes::findOrFail($id);
        $type->delete();
        toast('Ban növü müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

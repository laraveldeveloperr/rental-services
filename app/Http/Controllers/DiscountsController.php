<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Discounts;
use App\Models\Models;
use App\Models\Cars;


class DiscountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discounts::all();
        return view('admin.discounts.index', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['brands'] = Brands::where('status', 1)->get();
        $data['models'] = Models::where('status', 1)->get();
        $data['cars'] = Cars::where('status', 1)->get();
        return view('admin.discounts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Discounts::rules());
        $data = $request->all();
        Discounts::create($data);

        toast('Endirim müvəffəqiyyətlə tətbiq edildi', 'success');
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
        $data['discount'] = Discounts::findOrFail($id);
        $data['brands'] = Brands::where('status', 1)->get();
        $data['models'] = Models::where('status', 1)->get();
        $data['cars'] = Cars::where('status', 1)->get();
        return view('admin.discounts.edit', $data);
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
        $this->validate($request,Discounts::rules());
        $data = $request->all();
        $discount = Discounts::findOrFail($id);
        $discount->update($data);

        toast('Endirim məlumatları müvəffəqiyyətlə dıyişdirildi', 'success');
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
        $discount = Discounts::findOrFail($id);
        $discount->delete();
        
        toast('Endirim məlumatları müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

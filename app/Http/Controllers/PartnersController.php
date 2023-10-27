<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partners::all();
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = new Partners;
        $partner->company_name = $request->company_name;
        $partner->address = $request->address;
        $partner->voen = $request->voen;
        $partner->email = $request->email;
        $partner->phone_number = $request->phone_number;
        $partner->relevant_person = $request->relevant_person;
        if ($request->file('logo')) {
            $partner_logo = $request->file('logo');
            $partner_logo->move(public_path('images/partners'), $partner_logo->getClientOriginalName());
            $partner_logo = $partner_logo->getClientOriginalName();
        }
        $partner->logo = $partner_logo;
        $partner->status = $request->status;
        $partner->save();

        toast('Əməklaş müvəffəqiyyətlə əlavə edildi', 'success');
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
        $partner = Partners::findOrFail($id);
        return view('admin.partners.edit', compact('partner'));
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
        $partner = Partners::findOrFail($id);
        $partner->company_name = $request->company_name;
        $partner->address = $request->address;
        $partner->voen = $request->voen;
        $partner->email = $request->email;
        $partner->phone_number = $request->phone_number;
        $partner->relevant_person = $request->relevant_person;
        if ($request->file('logo')) {
            $oldlogo = $partner->logo;
            $partner_logo = $request->file('logo');
            $newlogoName = $partner_logo->getClientOriginalName();
            $partner_logo->move(public_path('images/partners'), $newlogoName);
            $partner->logo = $newlogoName;
            if ($oldlogo && file_exists(public_path('images/partners/' . $oldlogo))) {
                unlink(public_path('images/partners/' . $oldlogo));
            }
        }
        $partner->status = $request->status;
        $partner->save();
        toast('Əməkdaş məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
       
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
        $partner = Partners::findOrFail($id);
        $partner->delete();
        toast('Əməkdaş müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

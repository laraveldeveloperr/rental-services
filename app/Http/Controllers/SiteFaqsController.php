<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SiteFaqs;
use Illuminate\Http\Request;

class SiteFaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = SiteFaqs::all();
        return view('admin.for-site.faqs.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.for-site.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq = new SiteFaqs;
        $faq->fill($request->data);
        $faq->status = $request->status;
        $faq->save();
        toast('Sual-cavab müvəffəqiyyətlə əlavə edildi', 'success');
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
        $element = SiteFaqs::findOrFail($id);
        return view('admin.for-site.faqs.edit', compact('element'));
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
        $faq = SiteFaqs::findOrFail($id);
        $faq->fill($request->data);
        $faq->status = $request->status;
        $faq->save();
        toast('Sual-cavab müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $element = SiteFaqs::findOrFail($id);
        $element->delete();

        toast('Sual-cavab müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

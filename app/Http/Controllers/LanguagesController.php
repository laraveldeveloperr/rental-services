<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Languages::all();
        return view('admin.settings.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Languages::rules());
        $languages = new Languages;
        $languages->name = $request->name;
        $languages->shortened = $request->shortened;
        $languages->status = $request->status;
        $languages->save();

        toast('Dil müvəffəqiyyətlə əlavə edildi', 'success');
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
        $lang = Languages::findOrFail($id);
        $translations = $lang->getTranslations()->paginate(50);
        return view('admin.settings.languages.show', compact('lang', 'translations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lang = Languages::findOrFail($id);
        return view('admin.settings.languages.edit', compact('lang'));
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
        $this->validate($request,Languages::rules());
        $lang = Languages::findOrFail($id);
        $lang->name = $request->name;
        $lang->shortened = $request->shortened;
        $lang->status = $request->status;
        $lang->save();

        toast('Dil məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $lang = Languages::findOrFail($id);
        $lang->delete();
        toast('Dil müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

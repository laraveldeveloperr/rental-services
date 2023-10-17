<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Languages;
use App\Models\Translations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
        $languages = new Languages;
        $languages->name = $request->name;
        $languages->shortened = $request->shortened;
        $languages->status = $request->status;
        $languages->save();

        $newLanguageCode = $languages->shortened;
        $newLanguageFolder = resource_path('lang');

        if (!is_dir($newLanguageFolder)) {
            mkdir($newLanguageFolder, 0777, true);
        }

        $sourceLanguageFilePath = resource_path('lang/az.json');
        $sourceData = file_get_contents($sourceLanguageFilePath);

        file_put_contents($newLanguageFolder . '/' . $newLanguageCode . '.json', $sourceData);
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
        $lang = Languages::where('shortened', $id)->first();
        $translations = Translations::pluck('key')->toArray();

        $filePath = resource_path('lang/'. $id .'.json');
        $jsonData = file_get_contents($filePath);
        $decoded = json_decode($jsonData, true);
        
        $words = [];
        foreach ($translations as $key => $value) {
            $words[$key]['constant'] = $value;
            $words[$key]['value'] = $decoded[$value];
        }

        return view('admin.settings.languages.show', compact('lang', 'translations', 'words'));
    }

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
        $this->validate($request, Languages::rules());
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

    public function update_translations(Request $request)
    {
        $array = [];
        $constant = $request->constant;
        foreach ($constant as $key => $item) {
            $array[$item] = $request->value[$key];
        }
        $filePath = resource_path('lang/' . $request->lang . '.json');
        $jsonData = json_encode($array, JSON_PRETTY_PRINT);

        file_put_contents($filePath, $jsonData);

        toast('Tərcümələr müvəffəqiyyətlə yeniləndi', 'success');
        return back();
    }
}
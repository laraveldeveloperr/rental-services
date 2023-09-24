<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSettings;

class GeneralSettingsController extends Controller
{
    public function index()
    {
        $general_settings = GeneralSettings::first();
        return view('admin.settings.general_settings.index', compact('general_settings'));
    }

    public function store(Request $request)
    {

        $general_settings = GeneralSettings::first();
        if ($request->file('logo')) {
            $logo = $request->file('logo');
            $logo->move(public_path('images'), $logo->getClientOriginalName());
            $logo = $logo->getClientOriginalName();
            $general_settings->logo = $logo;
        }
        $general_settings->numbers = json_encode($request->numbers) ? json_encode($request->numbers) : NULL; 
        $general_settings->emails = json_encode($request->emails) ? json_encode($request->emails) : NULL; 
        $general_settings->address = $request->address ? $request->address : NULL;
        $general_settings->about_text = $request->about_text ? $request->about_text : NULL;
        $general_settings->social_networks = json_encode($request->social_networks) ? json_encode($request->social_networks) : NULL;
        $general_settings->meta_title = $request->meta_title ? $request->meta_title : NULL;
        $general_settings->meta_description = $request->meta_description ? $request->meta_description : NULL;
        $general_settings->meta_keywords = $request->meta_keywords ? $request->meta_keywords : NULL;
        $general_settings->repair_mode = $request->repair_mode;
        $general_settings->save();

        toast('Ümumi tənzimləmələr müvəffəqiyyətlə tıyin edildi', 'success');
        return back();
         


    }
}

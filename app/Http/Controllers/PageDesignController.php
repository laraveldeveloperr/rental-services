<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PageDesigns;
use Illuminate\Http\Request;

class PageDesignController extends Controller
{
    public function index()
    {
        $page = PageDesigns::first();
        return view('admin.settings.general_settings.page-design', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = PageDesigns::findOrFail($id);
        $page->topbar = $request->topbar == "on" ? 1 : 0;
        $page->header = $request->header == "on" ? 1 : 0;
        $page->menu = $request->menu == "on" ? 1 : 0;
        $page->slide = $request->slide == "on" ? 1 : 0;
        $page->search = $request->search == "on" ? 1 : 0;
        $page->about_us_section = $request->about_us_section == "on" ? 1 : 0;
        $page->banner1 = $request->banner1 == "on" ? 1 : 0;
        $page->banner2 = $request->banner2 == "on" ? 1 : 0;
        $page->blogs = $request->blogs == "on" ? 1 : 0;
        $page->comments_for_site = $request->comments_for_site == "on" ? 1 : 0;
        $page->members = $request->members == "on" ? 1 : 0;
        $page->offers = $request->offers == "on" ? 1 : 0;
        $page->services = $request->services == "on" ? 1 : 0;

        if ($request->file('home_about_section_image')) {
            $home_about_section_image = $request->file('home_about_section_image');
            $home_about_section_image->move(public_path('images'), $home_about_section_image->getClientOriginalName());
            $home_about_section_image = $home_about_section_image->getClientOriginalName();
            $page->home_about_section_image = $home_about_section_image;
        }

        if ($request->file('banner1_image')) {
            $banner1_image = $request->file('banner1_image');
            $banner1_image->move(public_path('images'), $banner1_image->getClientOriginalName());
            $banner1_image = $banner1_image->getClientOriginalName();
            $page->banner1_image = $banner1_image;
        }

        if ($request->file('banner2_image')) {
            $banner2_image = $request->file('banner2_image');
            $banner2_image->move(public_path('images'), $banner2_image->getClientOriginalName());
            $banner2_image = $banner2_image->getClientOriginalName();
            $page->banner2_image = $banner2_image;
        }


        $page->save();

        toast('Səhifə görünüşü müvəffəqiyyətlə tənzimləndi', 'success');
        return back();

    }
}
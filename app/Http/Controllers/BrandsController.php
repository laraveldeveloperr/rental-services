<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brands::withCount('models')->withCount('cars')->get();
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Brands::rules());
        $brand = new Brands;
        $brand->name = $request->name;
        if ($request->file('icon')) {
            $brand_icon = $request->file('icon');
            $brand_icon->move(public_path('images/brands'), $brand_icon->getClientOriginalName());
            $brand_icon = $brand_icon->getClientOriginalName();
        }
        $brand->icon = $brand_icon;
        $brand->slug = Str::slug($brand->name);
        $brand->status = $request->status;
        $brand->save();

        toast('Marka müvəffəqiyyətlə əlavə edildi', 'success');
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
        $brand = Brands::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
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
        $this->validate($request,Brands::rules());
        $brand = Brands::findOrFail($id);
        $brand->name = $request->name;
        if ($request->file('icon')) {
            $oldIcon = $brand->icon;
            $brand_icon = $request->file('icon');
            $newIconName = $brand_icon->getClientOriginalName();
            $brand_icon->move(public_path('images/brands'), $newIconName);
            $brand->icon = $newIconName;
            if ($oldIcon && file_exists(public_path('images/brands/' . $oldIcon))) {
                unlink(public_path('images/brands/' . $oldIcon));
            }
        }
        $brand->slug = Str::slug($brand->name);
        $brand->status = $request->status;
        try {
            $brand->save();
            toast('Marka məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
        } catch (\Exception $e) {
            toast('Marka məlumatlarını dəyişdirərkən xəta baş verdi', 'error');
        }
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
        $brand = Brands::findOrFail($id);
        $brand->delete();
        toast('Marka müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

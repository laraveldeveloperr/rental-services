<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Models::withCount(['cars', 'brands'])->get();
        return view('admin.models.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brands::where('status', 1)->get();
        return view('admin.models.create', compact('brands'));
    }

    public function getModelsByBrand($brand_id)
    {
        $models = Models::where('brands_id', $brand_id)->where('status', 1)->get();
        if ($models->isEmpty()) {
            return response()->json([], 204);
        }
        return response()->json($models, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Models;
        $model->fill($request->data);
        $model->brands_id = $request->brands_id;
        $model->status = $request->status;
        $model->save();

        toast('Model müvəffəqiyyətlə əlavə edildi', 'success');
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
        $brands = Brands::where('status', 1)->get();
        $model = Models::findOrFail($id);
        return view('admin.models.edit', compact('brands', 'model'));
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
        $models = Models::findOrFail($id);
        $models->fill($request->data);
        $models->brands_id = $request->brands_id;
        $models->status = $request->status;
        $models->save();
        toast('Model məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $model = Models::findOrFail($id);
        $model->delete();
        toast('Model müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

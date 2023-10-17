<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CarsGallery;
use Illuminate\Http\Request;

class CarsGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cars_id)
    {
        $gallery = CarsGallery::where('cars_id', $cars_id)->get();
        return view('admin.cars.gallery.index', compact('gallery', 'cars_id'));
    }
    public function upload(Request $request)
    {
        if ($request->file('file')) {
            $car_file = $request->file('file');
            $car_file->move(public_path('images/cars'), $car_file->getClientOriginalName());
            $car_file = $car_file->getClientOriginalName();
            CarsGallery::create([
                'cars_id' => $request->cars_id,
                'image' => $car_file
            ]);
        }

        return "Basarili";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = CarsGallery::findOrFail($id);
        $image->delete();
    }
}

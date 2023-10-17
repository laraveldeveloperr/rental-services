<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cars;
use App\Models\Brands;
use App\Models\CarsCarsFaqs;
use App\Models\Models;
use App\Models\Engines;
use App\Models\Colors;
use App\Models\Fuels;
use App\Models\Gears;
use App\Models\BanTypes;
use App\Models\Properties;
use App\Models\CarsProperties;
use App\Models\Brons;
use App\Models\Transmissions;
use App\Models\CarsFaqs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::with(['ban_types','brands', 'models'])->get();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['brands'] = Brands::where('status', 1)->get();
        $data['ban_types'] = BanTypes::where('status', 1)->get();
        $data['fuels'] = Fuels::where('status', 1)->get();
        $data['gears'] = Gears::where('status', 1)->get();
        $data['transmissions'] = Transmissions::where('status', 1)->get();
        $data['engines'] = Engines::where('status', 1)->get();
        $data['properties'] = Properties::where('status', 1)->get();
        $data['colors'] = Colors::where('status', 1)->get();
        $data['faqs'] = CarsFaqs::where('status', 1)->get();
        return view('admin.cars.create', $data);
    }

    public function getCarssByModel($model_id)
    {
        $cars = Cars::where('models_id', $model_id)->where('status', 1)->get();
        if ($cars->isEmpty()) {
            return response()->json([], 204);
        }
        return response()->json($cars, 200);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Cars;
        $car->fill($request->data);
        $car->brands_id = $request->brands_id;
        $car->models_id = $request->models_id;
        $car->fuels_id = $request->fuels_id;
        $car->gears_id = $request->gears_id;
        $car->transmissions_id = $request->transmissions_id;
        $car->engines_id = $request->engines_id;
        $car->ban_types_id = $request->ban_types_id;
        $car->colors_id = $request->colors_id;
        if ($request->file('main_image')) {
            $car_main_image = $request->file('main_image');
            $car_main_image->move(public_path('images/cars'), $car_main_image->getClientOriginalName());
            $car_main_image = $car_main_image->getClientOriginalName();
            $car->main_image = $car_main_image;
        }
        $car->licence_plate = $request->licence_plate;
        $car->manufacturing_year = $request->manufacturing_year;
        $car->day_price = $request->day_price ? $request->day_price : NULL;
        $car->week_price = $request->week_price ? $request->week_price : NULL;
        $car->month_price = $request->month_price ? $request->month_price : NULL;
        $car->status = $request->status;
        $car->save();

        if(!is_null($request->properties_id))
        {
            foreach ($request->properties_id as $key => $value) {
                $property = new CarsProperties;
                $property->cars_id = $car->id;
                $property->properties_id = $value;
                $property->save();
            }
        }

        if(!is_null($request->cars_faqs_id))
        {
            foreach ($request->cars_faqs_id as $key => $value) {
                $property = new CarsCarsFaqs;
                $property->cars_id = $car->id;
                $property->cars_faqs_id = $value;
                $property->save();
            }
        }

        toast('Avtomobil məlumatları müvəffəqiyyətlə əlavə edildi', 'success');
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
        $car = Cars::findOrFail($id);
        $car_month = Brons::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->where('cars_id', $id)
            ->get();

            $labels_month = [];
            $data_month = [];

            for ($i = 1; $i <= 12; $i++) {  // 12 ay
                $count_month = 0;

                foreach ($car_month as $key => $bron) {
                    if ($bron->month == $i) {
                        $count_month = $bron->count;
                        break;
                    }
                }

                array_push($labels_month, "Ay $i");
                array_push($data_month, $count_month);
            }

            $datasets_month = [
                [
                    'label' => 'Avtomobil üçün aylıq Bronlar',
                    'data' => $data_month
                ]
            ];
        return view('admin.cars.show', compact('car', 'car_month', 'labels_month', 'datasets_month'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['brands'] = Brands::where('status', 1)->get();
        $data['ban_types'] = BanTypes::where('status', 1)->get();
        $data['fuels'] = Fuels::where('status', 1)->get();
        $data['gears'] = Gears::where('status', 1)->get();
        $data['transmissions'] = Transmissions::where('status', 1)->get();
        $data['engines'] = Engines::where('status', 1)->get();
        $data['properties'] = Properties::where('status', 1)->get();
        $data['colors'] = Colors::where('status', 1)->get();
        $data['car'] = Cars::findOrFail($id);
        $data['models'] = Models::where('brands_id', $data['car']->brands_id)->get();
        $data['car_properties'] = CarsProperties::where('cars_id', $id)->pluck('properties_id')->toArray();
        $data['faqs'] = CarsFaqs::where('status', 1)->get();
        $data['faq_cars'] = CarsCarsFaqs::where('cars_id', $id)->pluck('cars_faqs_id')->toArray();
        return view('admin.cars.edit', $data);
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

        $car = Cars::findOrFail($id);
        $car->fill($request->data);
        $car->brands_id = $request->brands_id;
        $car->models_id = $request->models_id;
        $car->fuels_id = $request->fuels_id;
        $car->gears_id = $request->gears_id;
        $car->transmissions_id = $request->transmissions_id;
        $car->engines_id = $request->engines_id;
        $car->ban_types_id = $request->ban_types_id;
        $car->colors_id = $request->colors_id;
        if ($request->file('main_image')) {
            $oldmain_image = $car->main_image;
            $car_main_image = $request->file('main_image');
            $newmain_imageName = $car_main_image->getClientOriginalName();
            $car_main_image->move(public_path('images/cars'), $newmain_imageName);
            $car->main_image = $newmain_imageName;
            if ($oldmain_image && file_exists(public_path('images/cars/' . $oldmain_image))) {
                unlink(public_path('images/cars/' . $oldmain_image));
            }
        }
        $car->licence_plate = $request->licence_plate;
        $car->manufacturing_year = $request->manufacturing_year;
        $car->day_price = $request->day_price ? $request->day_price : NULL;
        $car->week_price = $request->week_price ? $request->week_price : NULL;
        $car->month_price = $request->month_price ? $request->month_price : NULL;
        $car->status = $request->status;
        $car->save();

        if(!is_null($request->properties_id))
        {
            $car->properties()->sync($request->properties_id);
        }

        if(!is_null($request->cars_faqs_id))
        {
            $car->faqs()->sync($request->cars_faqs_id);
        }

        toast('Avtomobil məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $car = Cars::findOrFail($id);
        $car->delete();
        toast('Avtomobil müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

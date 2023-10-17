<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BanTypes;
use App\Models\Brands;
use App\Models\Brons;
use App\Models\Cars;
use App\Models\Colors;
use App\Models\Engines;
use App\Models\Fuels;
use App\Models\Gears;
use App\Models\Models;
use App\Models\Properties;
use App\Models\Transmissions;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $start_date = $this->formatToIsoDate($request->start_date);
        $end_date = $this->formatToIsoDate($request->end_date);

        $brons = Brons::where('brands_id', $request->brands_id)
        ->where('pick_up', '<', $start_date)
        ->where('drop_off', '>', $start_date)
        ->get();

        $brand_name = Brands::where('id', $request->brands_id)->first()->name;

        $brands = Brands::where('status', 1)->get();
        $cars = Cars::with('galleries')->whereNotIn('id', $brons->pluck('cars_id')->all())->get();
        return view('frontend.search.index', compact('brand_name', 'brands','cars'));

    }

    function formatToIsoDate($date)
    {
        return \Carbon\Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }

}
<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BanTypes;
use App\Models\Brands;
use App\Models\Cars;
use App\Models\Colors;
use App\Models\Engines;
use App\Models\Fuels;
use App\Models\Gears;
use App\Models\Models;
use App\Models\Properties;
use App\Models\Transmissions;
use Illuminate\Http\Request;

class CarListingController extends Controller
{
    public function index()
    {
        $brands = Brands::where('status',1)->get();
        $models = Models::where('status',1)->get();
        $fuels = Fuels::where('status',1)->get();
        $gears = Gears::where('status',1)->get();
        $transmissions = Transmissions::where('status',1)->get();
        $engines = Engines::where('status',1)->get();
        $ban_types = BanTypes::where('status',1)->get();
        $properties = Properties::where('status',1)->get();
        $colors = Colors::where('status',1)->get();

        $cars = Cars::where('status', 1)->get();
        return view('frontend.car-listing.index', compact('cars', 'brands', 'models', 'fuels', 'gears', 'transmissions', 'engines', 'ban_types', 'properties', 'colors'));
    }

    public function car_details($id)
    {
        $car = Cars::findOrFail($id);
        return view('frontend.car-listing.car-details', compact('car'));
    }
}

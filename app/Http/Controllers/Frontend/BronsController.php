<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\BronEmailClass;
use App\Models\Brons;
use App\Models\Discounts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BronsController extends Controller
{
    public function reserve(Request $request)
    {
        $bron_number = 'RENTAL-SERVICES-'.rand(1000,9999);
        $start_date = $this->formatToIsoDate($request->pick_up);
        $end_date = $this->formatToIsoDate($request->drop_off);
        
        $bron = new Brons;
        $bron->bron_number = $bron_number; 
        $bron->brands_id = $request->brands_id; 
        $bron->models_id = $request->models_id; 
        $bron->cars_id = $request->cars_id; 
        $bron->pick_up = $start_date; 
        $bron->drop_off = $end_date; 
        $bron->name = $request->name; 
        $bron->surname = $request->surname; 
        $bron->email = $request->email; 
        $bron->phone = $request->phone; 
        $bron->special_request = $request->special_request; 
        $bron->price = $request->total_price; 
        $bron->discount = $request->discount; 
        $bron->discount_type = $request->discount_type; 
        $bron->discounted_price = $request->discounted_price; 
        $bron->status = 0; 
        $bron->created_at = Carbon::now(); 
        $bron->save();

        $bron_data = Brons::where('bron_number', $bron_number)->first()->toArray();

        Mail::to($request->email)->send(new BronEmailClass($bron_data));

        return back();

    }

    function formatToIsoDate($date)
    {
        return \Carbon\Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }
}

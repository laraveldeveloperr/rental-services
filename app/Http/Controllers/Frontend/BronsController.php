<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brons;
use App\Models\Discounts;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BronsController extends Controller
{
    public function reserve(Request $request)
    {
        $bron_number = 'RENTAL-SERVICES-'.rand(1000,9999);
        $start_date = $this->formatToIsoDate($request->pick_up);
        $end_date = $this->formatToIsoDate($request->drop_off);
        $total_price = $request->total_price;
        $discounts = Discounts::where('brands_id', $request->brands_id)
        ->where('models_id', $request->models_id)
        ->where('cars_id', $request->cars_id)->first();

        $discount = 0;
        $discount_type = null;

        if(!is_null($discounts))
        {
            $discount = $discounts->discount;
            if($discounts->type==1)
            {
                $discounted_price = $total_price - ($total_price * $discounts->discount/100);
                $discount_type = $discounts->type;
            } 
            else
            {
                $discounted_price = $total_price - $discounts->discount;
                $discount_type = $discounts->type;
            }
        }
        else
        {
            $discounted_price = $total_price;
        }
        
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
        $bron->price = $total_price; 
        $bron->discount = $discount; 
        $bron->discount_type = $discount_type; 
        $bron->discounted_price = $discounted_price; 
        $bron->status = 0; 
        $bron->created_at = Carbon::now(); 
        $bron->save();

        $message = __('a_booking_offer_has_been_sent_Thanks_for_choosing_us.'); 
        toast($message,'success');
        return back();

    }

    function formatToIsoDate($date)
    {
        return \Carbon\Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }
}

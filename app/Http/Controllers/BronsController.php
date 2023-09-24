<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettings;
use Illuminate\Http\Request;
use App\Models\Brons;
use Carbon\Carbon;
use PDF;

class BronsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brons = Brons::orderBy('id', 'DESC')->get();
        return view('admin.brons.index', compact('brons'));
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

    public function changeStatus(Request $request)
    {
        $bron = Brons::findOrFail($request->bron_id);
        $bron->status = $request->status;
        $bron->save();

        //burada hem istifadeciye hem de admine mesaj getmelidir

        return response()->json('Bron statusu müvəffəqiyyətlə dəyişdirildi', 200);
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
        $bron = Brons::findOrFail($id);
        $ilkTarih = Carbon::createFromFormat('Y-m-d', $bron->pick_up); // İlk tarih
        $ikinciTarih = Carbon::createFromFormat('Y-m-d', $bron->drop_off); // İkinci tarih
        $gunFarki = $ilkTarih->diffInDays($ikinciTarih);

        $brand = $bron->brands;
        $model = $bron->models;
        $car = $bron->cars;

        if ($brand->discounts != null) {
            $discount = $brand->discounts->discount;
        } else {
            $discount = 0;
        }

        if ($model->discounts != null) {
            $discount = $model->discounts->discount;
        } else {
            $discount = 0;
        }

        if ($car->discounts != null) {
            $discount = $car->discounts->discount;
        } else {
            $discount = 0;
        }

        $general_settings = GeneralSettings::first();

        return view('admin.brons.show', compact('bron', 'gunFarki', 'discount', 'general_settings'));
    }

    public function invoice_download($id)
    {
        $bron = Brons::findOrFail($id);
        $ilkTarih = Carbon::createFromFormat('Y-m-d', $bron->pick_up); // İlk tarih
        $ikinciTarih = Carbon::createFromFormat('Y-m-d', $bron->drop_off); // İkinci tarih
        $gunFarki = $ilkTarih->diffInDays($ikinciTarih);

        $brand = $bron->brands;
        $model = $bron->models;
        $car = $bron->cars;

        if ($brand->discounts != null) {
            $discount = $brand->discounts->discount;
        } else {
            $discount = 0;
        }

        if ($model->discounts != null) {
            $discount = $model->discounts->discount;
        } else {
            $discount = 0;
        }

        if ($car->discounts != null) {
            $discount = $car->discounts->discount;
        } else {
            $discount = 0;
        }

        return view('admin.invoice', compact('bron', 'gunFarki', 'discount'));
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
        //
    }
}

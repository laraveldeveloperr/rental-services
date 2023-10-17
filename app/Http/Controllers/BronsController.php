<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettings;
use Illuminate\Http\Request;
use App\Models\Brons;
use Carbon\Carbon;
use PDF;
use Mail;

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

        $to_email = $bron->email.
        $general_settings = GeneralSettings::first();
        $admin_email = json_decode($general_settings->emails, true)[0];
        $admin_number = json_decode($general_settings->numbers, true)[0];
        
        $data = [
            'bron_number'               =>        $bron->bron_number,
            'brands_id'                 =>        $bron->brands_id,
            'models_id'                 =>        $bron->models_id,
            'cars_id'                   =>        $bron->cars_id,
            'price'                     =>        $bron->price,
            'discount_type'             =>        $bron->discount_type,
            'discount'                  =>        $bron->discount,
            'discounted_price'          =>        $bron->discounted_price,
            'name'                      =>        $bron->name,
            'surname'                   =>        $bron->surname,
            'phone'                     =>        $bron->phone,
            'special_request'           =>        $bron->special_request,
            'email'                     =>        $bron->email,
            'start_date'                =>        $bron->pick_up,
            'end_date'                  =>        $bron->drop_off,
            'created_at'                =>        $bron->created_at->format('d.m.Y')
        ];
        
        
        $title = "Bron qəbul edildi!";
        
        $to_email = "chaparoglucavid@gmail.com";

        Mail::send('admin.mail.accepted', $data, function($m) use ($title, $to_email) {
            $m->from('laraveldeveloperr@gmail.com', env('APP_NAME'));
            $m->to($to_email, env('MAIL_FROM_NAME'))->subject($title);
        });

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

        $general_settings = GeneralSettings::first();

        return view('admin.brons.show', compact('bron', 'gunFarki','general_settings'));
    }

    public function invoice_download($id)
    {
    $bron = Brons::findOrFail($id);
    $ilkTarih = Carbon::createFromFormat('Y-m-d', $bron->pick_up);
    $ikinciTarih = Carbon::createFromFormat('Y-m-d', $bron->drop_off);
    $gunFarki = $ilkTarih->diffInDays($ikinciTarih);

    $pdf = PDF::loadView('admin.invoice', compact('bron', 'gunFarki'))->setOptions(['defaultFont' => 'sans-serif']);
    return $pdf->stream('invoice.pdf');
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
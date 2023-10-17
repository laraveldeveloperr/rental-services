<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CallRequests;
use Illuminate\Http\Request;

class CallRequestsController extends Controller
{
    public function index()
    {
        $call = CallRequests::all();
        return view('admin.call-requests.index', compact('call'));
    }

    public function update(Request $request,$id)
    {
        $item = CallRequests::findOrFail($id);
        $item->status = 1;
        $item->save();

        toast('Zəng "Cavab verildi" olaraq işarələndi.', "success");
        return back();
    }
}

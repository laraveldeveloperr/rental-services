<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teams;
use Illuminate\Http\Request;

use Session;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::all();
        return view('admin.settings.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.settings.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Teams;
        $team->name_surname = $request->name_surname;
        $team->experience = $request->experience;
        $team->job = $request->job;
        if ($request->file('image')) {
            $team_image = $request->file('image');
            $team_image->move(public_path('images/team'), $team_image->getClientOriginalName());
            $team_image = $team_image->getClientOriginalName();
        }
        $team->image = $team_image;
        $team->status = $request->status;
        $team->save();

        toast('Komanda üzvü müvəffəqiyyətlə əlavə edildi', 'success');
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
        $team = Teams::findOrFail($id);
        return view('admin.settings.teams.edit', compact('team'));
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
        $team = Teams::findOrFail($id);
        $team->name_surname = $request->name_surname;
        $team->experience = $request->experience;
        $team->job = $request->job;
        if ($request->file('image')) {
            $oldimage = $team->image;
            $team_image = $request->file('image');
            $newimageName = $team_image->getClientOriginalName();
            $team_image->move(public_path('images/team'), $newimageName);
            $team->image = $newimageName;
            if ($oldimage && file_exists(public_path('images/team/' . $oldimage))) {
                unlink(public_path('images/team/' . $oldimage));
            }
        }
        $team->status = $request->status;
        $team->save();
        toast('Komanda üzvü məlumatları müvəffəqiyyətlə dəyişdirildi', 'success');
       
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
        $team = Teams::findOrFail($id);
        $team->delete();
        toast('Komanda üzvü müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

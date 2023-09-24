<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SiteComments;
use Illuminate\Http\Request;

class SiteCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = SiteComments::all();
        return view('admin.for-site.site-comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.for-site.site-comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,SiteComments::rules());
        $comment = new SiteComments;
        $comment->who_shared = $request->who_shared;
        $comment->name_surname = $request->name_surname;
        $comment->comment = $request->comment;
        $comment->comment_date = $request->comment_date;
        $comment->status = $request->status;
        $comment->save();

        toast('Rəy müvəffəqiyyətlə əlavə edildi', 'success');
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
        $comment = SiteComments::findOrFail($id);
        return view('admin.for-site.site-comments.edit', compact('comment'));
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
        $this->validate($request,SiteComments::rules());
        $comment = SiteComments::findOrFail($id);
        $comment->who_shared = $request->who_shared;
        $comment->name_surname = $request->name_surname;
        $comment->comment = $request->comment;
        $comment->comment_date = $request->comment_date;
        $comment->status = $request->status;
        $comment->save();

        toast('Rəy müvəffəqiyyətlə dəyişdirildi', 'success');
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
        $comment = SiteComments::findOrFail($id);
        $comment->delete();
        toast('Rəy müvəffəqiyyətlə silindi', 'success');
        return back();
    }
}

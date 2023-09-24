<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use View;

class MessagesController extends Controller
{

    public function __construct()
    {
        $unread = Messages::where('read', 0)
            ->where('sent', 0)
            ->where('draft', 0)
            ->count();

        view()->share('unread', $unread);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Messages::where('sent', 0)->where('draft', 0)->get();
        
        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.messages.create');
    }

    public function sent()
    {
        
        $messages = Messages::where('sent', 1)->get();
        return view('admin.messages.sent', compact('messages'));
    }

    public function starred()
    {
        
        $messages = Messages::where('starred', 1)->get();
        return view('admin.messages.starred', compact('messages'));
    }

    public function draft()
    {
        
        $messages = Messages::where('draft', 1)->where('sent', 0)->get();
        return view('admin.messages.draft', compact('messages'));
    }

    public function deleted()
    {
        
        $messages = Messages::onlyTrashed()->get();
        return view('admin.messages.deleted', compact('messages'));
    }

    public function update_info($messages_id, $fill_type)
    {
        $message = Messages::findOrFail($messages_id);
        $starred = ($fill_type === "orange") ? 0 : 1;
        $message->update(['starred' => $starred]);
        $messageText = ($starred === 0) ? "Mesaj seçilmişlerden çıkarıldı" : "Mesaj seçilmişlere eklendi";
        return response()->json(['message' => $messageText], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->send == 1)
        {
            $send = 1;
            $draft = 0;
        }
        else
        {
            $send = 0;
            $draft = 1;
        }
        $message = new Messages;
        $message->sender = 'rental@info.az';
        $message->repicient = $request->repicient;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->read = 1;
        $message->starred = 0;
        $message->draft = $draft;
        $message->sent = $send;
        $message->save();
        
        if($request->send == 1)
        {
            toast('Mesaj müvəffəqiyyətlə göndərildi', 'success');
        }else{
            toast('Mesaj qaralamaya qeyd olundu', 'info');
        }

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
        $message = Messages::findOrFail($id);
        $message->read = 1;
        $message->save();
        return view('admin.messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Messages::findOrFail($id);
        return view('admin.messages.edit', compact('message'));
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
        $data = [
            'sender' => 'rental@info.az',
            'repicient' => $request->repicient,
            'subject' => $request->subject,
            'message' => $request->message,
            'read' => 1,
            'starred' => 0,
            'draft' => $request->send == 0 ? 1 : 0,
            'sent' => $request->send == 1 ? 1 : 0,
        ];

        $message = Messages::findOrFail($id);
        $message->update($data);

        if ($request->send == 1) {
            toast('Mesaj müvəffəqiyyətlə göndərildi', 'success');
            return redirect()->route('admin.sent-messages');
        } else {
            toast('Mesaj qaralamaya qeyd olundu', 'info');
            return redirect()->route('admin.draft-messages');
        }
    }

    public function mark_as_read(Request $request)
    {
        foreach($request->selectedMessages as $message)
        {
            $message = Messages::findOrFail($message);
            $message->read = 1;
            $message->save();
        }
        $messageText = "Seçilən mesajlar oxundu - olaraq işarələndi";
        return response()->json(['message' => $messageText], 200);
    }

    public function mark_as_unread(Request $request)
    {
        foreach($request->selectedMessages as $message)
        {
            $message = Messages::findOrFail($message);
            $message->read = 0;
            $message->save();
        }
        $messageText = "Seçilən mesajlar oxunmamış - olaraq işarələndi";
        return response()->json(['message' => $messageText], 200);
    }

    public function restore_selected(Request $request)
    {
        foreach ($request->selectedMessages as $messageId) {
            $message = Messages::onlyTrashed()->find($messageId);
            if ($message) {
                $message->restore();
            }
        }
        $messageText = "Seçilən mesajlar müvəffəqiyyətlə geri qaytarıldı";
        return response()->json(['message' => $messageText], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Messages::findOrFail($id);
        $message->delete();

        toast('Mesaj müvəffəqiyyətlə silind', 'success');
        return back();
    }

    public function destroy_selected(Request $request)
    {
        foreach ($request->selectedMessages as $messageId) {
            $message = Messages::findOrFail($messageId);
            if ($message) {
                $message->delete();
            }
        }

        $messageText = "Seçilən mesajlar müvəffəqiyyətlə silindi";
        return response()->json(['message' => $messageText], 200);
    }

    public function delete_selected(Request $request)
    {
        foreach ($request->selectedMessages as $messageId) {
            $message = Messages::onlyTrashed()->find($messageId);

            if ($message) {
                $message->forceDelete();
            }
        }

        $messageText = "Seçilən mesajlar müvəffəqiyyətlə silindi";
        return response()->json(['message' => $messageText], 200);
    }
}

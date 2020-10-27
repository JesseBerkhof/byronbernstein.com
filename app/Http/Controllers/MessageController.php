<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function approve(Message $message): RedirectResponse
    {
        $message->update([
            'approved_at' => now()
        ]);

        $message->save();

        return redirect()->back();
    }

    public function delete(Message $message, Request $request): RedirectResponse
    {
        $message->delete();
        $request->session()->flash('error', 'Message has been deleted.');

        return redirect()->back();
    }

    public function show(Message $message)
    {
        return view('messages.show')->with([
            'message' => $message
        ]);
    }

    public function search(Request $request)
    {
        $messages = Message::query()
            ->orWhere('username', 'like', '%' . $request->get('q') . '%')
            ->orWhere('body', 'like', '%' . $request->get('q') . '%')
            ->paginate(20);

        return view('messages.search')->with([
            'messages' => $messages
        ]);
    }
}

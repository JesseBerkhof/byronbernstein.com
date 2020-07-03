<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\MessageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MessageController extends Controller
{
    public function store(MessageRequest $request)
    {
        $message = new Message;

        $payload = Arr::add($request->all(), 'ip', $request->ip());

        $message->fill($payload);
        $message->save();

        $request->session()->flash('success', 'Het is gelukt! Uw bedankje wordt zo snel mogelijk toegevoegd aan de lijst.');

        return redirect()->back();
    }

    public function approve(Message $message, Request $request)
    {
        $message->update([
            'approved_at' => now()
        ]);

        $message->save();

        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $message = Message::find($request->appreciation_id);
        $message->delete();

        $request->session()->flash('error', 'Bedankje is gearchiveerd.');

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Heart;
use App\Message;

class SiteController extends Controller
{
     public function index() {

         $messages = Message::query()->whereNotNull('approved_at')->orderByDesc('created_at')->paginate(100);
         $unapproved = Message::query()->whereNull('approved_at')->orderByDesc('created_at')->paginate(100);

         $hearts = Heart::all()->count();
         $totalMessages = Message::all()->count();

         return view('index')->with([
             'totalMessages' => $totalMessages,
            'messages' => $messages,
            'hearts' => $hearts,
            'unapproved' => $unapproved
        ]);
     }
}

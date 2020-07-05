<?php

namespace App\Http\Controllers;

use App\Heart;
use App\Message;

class SiteController extends Controller
{
     public function index() {

         $messages = Message::query()->whereNotNull('approved_at')->orderByDesc('created_at')->paginate(75);
         $unapproved = Message::query()->whereNull('approved_at')->orderByDesc('created_at')->paginate(75);

         return view('index')->with([
             'totalMessages' => Message::count(),
             'messages' => $messages,
             'hearts' => Heart::count(),
             'unapproved' => $unapproved,
        ]);
     }
}

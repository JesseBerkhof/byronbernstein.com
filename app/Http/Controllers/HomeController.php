<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Message::query()->whereNull('approved_at')->orderByDesc('created_at')->paginate(75);
        return view('home')->with([
            'messages' => $messages,
        ]);
    }
}

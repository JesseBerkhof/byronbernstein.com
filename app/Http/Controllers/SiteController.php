<?php

namespace App\Http\Controllers;

use App\Appreciation;

class SiteController extends Controller
{
     public function index() {
        return view('index')->with([
            'appreciations' => Appreciation::all()->whereNotNull('approved_at')->sortByDesc('created_at')
        ]);
     }

     public function measures() {
        return view('measures');
     }
}

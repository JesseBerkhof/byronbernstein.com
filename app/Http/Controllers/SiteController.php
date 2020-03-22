<?php

namespace App\Http\Controllers;

use App\Appreciation;

class SiteController extends Controller
{
     public function index() {
         return view('index')->with([
            'appreciations' => Appreciation::orderBy('created_at', 'DESC')->paginate(100)
        ]);
     }

     public function measures() {
        return view('measures');
     }
}

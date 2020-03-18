<?php

namespace App\Http\Controllers;

use App\Appreciation;

class SiteController extends Controller
{

     public function index() {
        return view('index');
     }

     public function hygiene() {
        return view('hygiene');
     }

     public function faq() {
        return view('faq');
     }

     public function thanks() {
        return view('thanks')->with([
            'countries' => trans('countries'),
            'appreciations' => Appreciation::all()->sortByDesc('created_at')
        ]);
     }

     public function donate() {
        return view('donate');
     }

}

<?php

namespace App\Http\Controllers;

use App\Appreciation;
use GuzzleHttp\Client;

class SiteController extends Controller
{
     public function index() {

         $appreciations = Appreciation::query()->whereNotNull('approved_at')->orderByDesc('created_at')->paginate(100);
         $unapproved = Appreciation::query()->whereNull('approved_at')->orderByDesc('created_at')->paginate(100);

         return view('index')->with([
            'appreciations' => $appreciations,
             'unapproved' => $unapproved
        ]);
     }

     public function measures() {
        return view('measures');
     }
}

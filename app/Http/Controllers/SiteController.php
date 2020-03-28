<?php

namespace App\Http\Controllers;

use App\Appreciation;
use GuzzleHttp\Client;

class SiteController extends Controller
{
     public function index() {

         //$token = 'OTdjMzhkOGVmMDM3MzYzMjFkNzA0Y2Y4ZGRlMDAwNmFmOTFkYmVjZjBhMDIxYWExOGMyZDE1OTM2MmJkMjFhMQ';
         //$client = new Client();
         //
         //$headers = [
         //    'Authorization' => 'Bearer ' . $token,
         //    'Accept' => 'application/json',
         //];
         //
         //$response = $client->request('GET', 'https://api.geef.nl/actions/covid-19', [
         //    'headers' => $headers
         //]);
         //
         //$donationData = json_decode($response->getBody()->getContents(), true)['statistics'];

         return view('index')->with([
            'appreciations' => Appreciation::query()->whereNotNull('approved_at')->orderByDesc('created_at')->paginate(100)
        ]);
     }

     public function measures() {
        return view('measures');
     }
}

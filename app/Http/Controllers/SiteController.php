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
            'appreciations' => Appreciation::orderBy('created_at', 'DESC')->paginate(100),
            //'totalDonations' => $donationData['donationsSum'] ?? null,
            //'totalDonators' => $donationData['donationsCount'] ?? null
        ]);
     }

     public function measures() {
        return view('measures');
     }
}

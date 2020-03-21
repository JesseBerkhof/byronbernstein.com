<?php

namespace App\Http\Controllers;

use App\Appreciation;
use App\Http\Requests\AppreciationRequest;
use Illuminate\Support\Arr;

class AppreciationController extends Controller
{
    public function store(AppreciationRequest $request)
    {
        $appreciation = new Appreciation;

        $payload = Arr::add($request->all(), 'ip', $request->ip());

        $appreciation->fill($payload);
        $appreciation->save();

        $request->session()->flash('success', 'Het is gelukt! Uw bedankje wordt zo snel mogelijk toegevoegd aan de lijst.');

        return redirect()->back();
    }
}

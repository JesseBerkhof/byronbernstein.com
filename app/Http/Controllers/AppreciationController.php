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

        return redirect()->back();
    }
}

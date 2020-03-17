<?php

namespace App\Http\Controllers;

use App\Appreciation;
use App\Http\Requests\AppreciationRequest;

class AppreciationController extends Controller
{
    public function store(AppreciationRequest $request)
    {
        $appreciation = new Appreciation;

        $appreciation->fill($request->all());

        $appreciation->save();

        return redirect()->back();
    }
}

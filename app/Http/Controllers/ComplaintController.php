<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComplaintRequest;
use App\Complaint;

class ComplaintController extends Controller
{
    public function store(ComplaintRequest $request)
    {
    	$complaint = Complaint::create($request->all());

    	return redirect()->route('home');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetitionRequest;
use App\Petition;

class PetitionController extends Controller
{
    public function index()
    {
        $messages = Petition::query()->whereNotNull('approved_at')->orderByDesc('created_at')->paginate(75);
        $total = Petition::count();

        return view('petitions.index')->with([
            'messages' => $messages,
            'total' => $total
        ]);
    }

    public function store(PetitionRequest $request)
    {
        $duplicate = Petition::query()->where('name', $request->get('name'))->where('message', $request->get('message'));

        if ($duplicate->exists()) {
            return redirect()->route('petitions.vote');
        }

        $petition = new Petition($request->all());
        $petition->save();

        return redirect()->route('petitions.vote');
    }

    public function vote()
    {
        return view('petitions.vote');
    }
}

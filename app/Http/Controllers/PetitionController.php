<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetitionRequest;
use App\Petition;

class PetitionController extends Controller
{
    public function index()
    {
        $messages = Petition::query()->whereNotNull('approved_at')->orderByDesc('created_at')->paginate(75);

        return view('petitions.index')->with([
            'messages' => $messages
        ]);
    }

    public function store(PetitionRequest $request)
    {
        $petition = new Petition($request->all());
        $petition->save();

        return redirect()->away('https://twitch.uservoice.com/forums/928738-emotes/suggestions/41210275-make-reckh-a-global-emote');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetitionRequest;
use App\Petition;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PetitionController extends Controller
{
    public function index(): View
    {
        $messages = Petition::query()
            ->whereNotNull('approved_at')
            ->orderByDesc('created_at')
            ->paginate(75);

        return view('petitions.index')->with([
            'messages' => $messages,
            'total' => Petition::count(),
        ]);
    }

    public function store(PetitionRequest $request): RedirectResponse
    {
        $duplicate = Petition::query()
            ->where('name', $request->get('name'))
            ->where('message', $request->get('message'));

        if ($duplicate->exists()) {
            return redirect()->route('petitions.vote');
        }

        $petition = new Petition($request->all());
        $petition->save();

        return redirect()->route('petitions.vote');
    }

    public function vote(): View
    {
        return view('petitions.vote');
    }
}

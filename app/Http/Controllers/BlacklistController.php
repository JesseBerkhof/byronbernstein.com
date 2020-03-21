<?php

namespace App\Http\Controllers;

use App\Blacklist;
use App\Http\Requests\BlacklistRequest;
use Illuminate\Http\Request;

class BlacklistController extends Controller
{
    public function store(BlacklistRequest $request)
    {
        if (Blacklist::query()->where('ip', $request->ip)->exists()) {
            $request->session()->flash('error', 'Dit ip address is al geblokkeerd.');
            return redirect()->back();
        }


        $blacklist = new Blacklist;

        $blacklist->fill($request->all());
        $blacklist->save();

        $request->session()->flash('success', sprintf('Gebruiker met ip %s is nu geblokkeerd.', $blacklist->ip));

        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $blacklist = Blacklist::find($request->blacklist_id);

        $request->session()->flash('error', sprintf('Het ip %s is nu niet meer geblokkeerd', $blacklist->ip));
        $blacklist->delete();


        return redirect()->back();
    }
}

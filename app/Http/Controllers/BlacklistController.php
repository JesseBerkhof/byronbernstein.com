<?php

namespace App\Http\Controllers;

use App\Blacklist;
use App\Http\Requests\BlacklistRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlacklistController extends Controller
{
    public function store(BlacklistRequest $request): RedirectResponse
    {
        if (Blacklist::query()->where('ip', $request->ip)->exists()) {
            $request->session()->flash('error', 'This IP is already blocked.');
            return redirect()->back();
        }

        $blacklist = new Blacklist;

        $blacklist->fill($request->all());
        $blacklist->save();

        $request->session()->flash('success', sprintf('User with IP [%s] is now blocked.', $blacklist->ip));

        return redirect()->back();
    }

    public function delete(Request $request): RedirectResponse
    {
        $blacklist = Blacklist::find($request->blacklist_id);

        $request->session()->flash('error', sprintf('IP [%s] is unblocked.', $blacklist->ip));
        $blacklist->delete();


        return redirect()->back();
    }
}

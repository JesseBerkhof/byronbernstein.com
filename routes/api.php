<?php

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/message', static function (Request $request) {
    $message = new Message;

    $payload = Arr::add($request->all(), 'ip', $request->ip());

    $message->fill($payload);
    $message->save();

    return redirect()->route('index');
});

Route::post('/heart', static function (Request $request) {
    $heart = new Heart;

    $payload = Arr::add($request->all(), 'ip', $request->ip());

    $heart->fill($payload);
    $heart->save();

    return redirect()->route('index');
});

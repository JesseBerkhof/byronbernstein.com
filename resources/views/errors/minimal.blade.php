@extends('layouts.master')
@section('content')
    <div class="container mx-auto text-white font-bold mt-64">
        <div class="flex">
            <div class="w-full text-center">
                <h1 class="text-4xl">@yield('code')</h1>
                <h2 class="text-2xl mb-12">@yield('message') :(</h2>
                <a href="{{ redirect()->back()->getTargetUrl() }}">Go back</a>
            </div>
        </div>
    </div>
@endsection

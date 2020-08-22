@extends('layouts.master')

@section('content')
    <div class="container-fluid lg:mx-12">
        <div class="py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-6">
            <div class="relative max-w-xl mx-auto">
                <div class="text-center">
                    <div class="flex mb-12">
                        <div class="mx-auto">
                            <img src="{{ asset('images/reckh.png') }}" alt="reckH">
                        </div>
                    </div>
                    <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10">
                        Thank you for signing
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-gray-500 mb-12">
                        Your message will be approved shortly
                    </p>

                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="https://twitch.uservoice.com/forums/928738-emotes/suggestions/41210275-make-reckh-a-global-emote" class="inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-purple-600 hover:bg-purple-500 focus:outline-none focus:border-purple-700 focus:shadow-outline-purple active:bg-purple-700 transition ease-in-out duration-150" target="_blank">Vote on Twitch</a>
                    </span>
                </div>
            </div>
        </div>
@endsection

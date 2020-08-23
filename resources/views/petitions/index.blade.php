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
                        Sign this petition
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-gray-500">
                        For <span class="font-bold">reckH</span> to be a global Twitch emote
                    </p>
                    <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-purple-500 sm:text-4xl sm:leading-10 mt-10">
                        {{ $total }}
                        <br>
                        signed
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-gray-500">
                        <span class="mx-auto inline-flex rounded-md shadow-sm">
                            <a href="https://twitch.uservoice.com/forums/928738-emotes/suggestions/41210275-make-reckh-a-global-emote" class="font-semibold inline-flex items-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-purple-600 hover:bg-purple-500 focus:outline-none focus:border-purple-700 focus:shadow-outline-purple active:bg-purple-700 transition ease-in-out duration-150">
                              Vote on Twitch
                            </a>
                          </span>
                        <br>
                        <br>
                        Make sure to vote via the button above. Share this on social media and send it to Twitch to make them notice this.
                        <br>
                        <br>
                        Let's make this happen, together.
                        <br><span class="font-bold text-purple-500">#reckH</span>
                    </p>
                </div>
                <div class="mt-12">
                    <form action="{{ route('petitions.store') }}" method="POST" class="grid grid-cols-1 row-gap-6 sm:grid-cols-2 sm:col-gap-8">
                        @csrf
                        <div class="sm:col-span-2">
                            <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Name</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input name="name" class="form-input text-white bg-gray-800 border-transparent py-3 px-4 block w-full transition ease-in-out duration-150">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-sm font-medium leading-5 text-gray-700">Message (optional)</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <textarea name="message" rows="4" class="form-textarea text-white bg-gray-800 border-transparent py-3 px-4 block w-full transition ease-in-out duration-150"></textarea>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                          <span class="w-full inline-flex rounded-md shadow-sm">
                            <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-purple-600 hover:bg-purple-500 focus:outline-none focus:border-purple-700 focus:shadow-outline-purple active:bg-purple-700 transition ease-in-out duration-150">
                              Sign petition
                            </button>
                          </span>
                            <div class="text-center text-xs mt-2 text-gray-600">
                                <div class="sharethis-inline-share-buttons"></div>
                                <br>
                                Your message have to be approved before it's shown on the page.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @foreach($messages->chunk(5) as $index => $chunk)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5">
                @foreach($chunk as $message)
                    <div class="bg-gray-900 sm:rounded-lg m-2">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg leading-6 font-semibold text-purple-400">
                                {{ $message->name }} - {{ $message->created_at->diffForHumans() }}
                            </h3>
                            <div class="mt-2 max-w-xl text-sm leading-5 text-purple-200">
                                <p>
                                    {{ $message->message }}
                                </p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        @endforeach
    </div>

    <div class="container-fluid">
        <div class="flex">
            <div class="w-full mx-auto my-12">
                {{ $messages->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection

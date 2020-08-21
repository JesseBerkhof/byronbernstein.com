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
                        For <span class="font-bold">reckH</span> to be a twitch global emote
                    </p>
                    <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-purple-500 sm:text-4xl sm:leading-10 mt-10">
                        {{ $messages->count() }}
                        <br>
                        signed
                    </h2>
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
                                Your message have to be approved before it's shown on the page.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @foreach($messages->chunk(3) as $index => $chunk)
            @if($index === 1)
                <div class="flex flex-wrap justify-center">
                    <div class="w-full sm:w-full lg:w-1/2 xl:w-1/2 m-2 font-bold text-white text-center">
                    <span class="text-xs text-gray-600"><a href="https://twitter.com/arcticn0b" class="font-bold text-gray-400">Contact</a> me if you've seen a negative message. Or have any suggestions for the page. <br> Memories such as fan art can be sent to <a href="mailto:memories@byronbernstein.com" class="text-gray-400">memories@byronbernstein.com</a></span/>
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
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

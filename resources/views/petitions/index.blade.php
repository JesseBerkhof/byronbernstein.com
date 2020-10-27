@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="py-8 px-4 overflow-hidden">
            <div class="relative md:pb-2 lg:pb-4 xl:pb-8">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
                    <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
                        <div class="mx-auto md:flex md:space-x-10">
                            <a href="{{ route('index') }}" class="font-medium text-purple-500 hover:text-purple-900 transition duration-150 ease-in-out">Go back to the messages</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="relative max-w-xl mx-auto">
                <div class="text-center">
                    <div class="flex mb-12">
                        <div class="mx-auto mt-12">
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

        <div class="container mx-auto">
            <div class="flex">
                <div class="w-full">
                    @foreach($messages->chunk(4) as $index => $chunk)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                            @foreach($chunk as $message)
                                <div class="group transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 hover:bg-purple-600 transition ease-in-out duration-300 rounded-lg m-4 hover:text-white">
                                    <div class="px-4 py-5 sm:p-6">
                                        <h2 class="text-lg leading-6 font-bold text-white">
                                            {{ $message->name }}
                                            <br>
                                            <span class="text-xs">{{ $message->created_at->diffForHumans() }}</span>
                                        </h2>
                                        <div class="mt-2 max-w-xl leading-5 text-gray-400 group-hover:text-white">
                                            {{ $message->message }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    <div class="container-fluid">
        <div class="flex">
            <div class="w-full mx-auto my-12">
                {{ $messages->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection

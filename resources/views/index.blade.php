@extends('layouts.master')

@section('content')
	<div class="container mx-auto">
        @include('components.header')

        <div class="flex">
            <div class="w-full text-center">
                <p class="text-white mt-24">
                    <span class="font-semibold">Leave a message or heart in the chat in memory of Byron.</span>
                </p>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-3 mx-auto mt-24">
                    <div class="overflow-hidden">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm leading-5 font-semibold text-gray-400 truncate">
                                    Messages
                                </dt>
                                <dd class="mt-1 text-5xl leading-9 font-bold text-purple-600">
                                    {{ $totalMessages }}
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <div class="px-4 py-5 sm:p-6">
                            <message-form></message-form>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm leading-5 font-semibold text-gray-400 truncate">
                                    Hearts
                                </dt>
                                <dd class="mt-1 text-5xl leading-9 font-bold text-purple-600">
                                    {{ $hearts }}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="mt-5 grid grid-cols-1 mx-auto mt-12 mb-24">
                    <iframe src="https://open.spotify.com/embed/track/2gVqepVqbwmR0jao7kFbAz&volume=10" volume="10" width="300" height="380" frameborder="0" class="mx-auto" allowtransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid lg:mx-24">
        <div class="flex flex-wrap justify-center">
            @include('components.pinned')
        </div>
        @if(in_array(\Illuminate\Support\Facades\Request::ip(), config('admins'), true))
        @foreach($unapproved->chunk(4) as $index => $chunk)
            <div class="flex flex-wrap justify-center">
                @foreach($chunk as $message)
                    @include('components.message', ['message' => $message, 'unapproved' => true])
                @endforeach
            </div>
        @endforeach
        @endif

        @foreach($messages->chunk(3) as $index => $chunk)
            @if($index === 1)
            <div class="flex flex-wrap justify-center">
                <div class="w-full sm:w-full lg:w-1/2 xl:w-1/2 m-2 font-bold text-white text-center">
                    <span class="text-xs text-gray-600"><a href="https://twitter.com/Arctic7empest" class="font-bold text-gray-400">Contact</a> me if you've seen a negative message. Or have any suggestions for the page.</span>
                </div>
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                @foreach($chunk as $message)
                    @include('components.message', ['message' => $message])
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

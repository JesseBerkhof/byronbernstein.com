@extends('layouts.master')

@section('content')
	<div class="container mx-auto">
        @include('components.header')

        <div class="flex">
            <form action="{{ route('messages.search') }}" class="w-full mx-auto mt-24 max-w-sm">
                <div class="flex items-center py-2">
                    <input name="q" class="appearance-none w-full bg-gray-900 text-gray-600 mr-3 rounded py-4 px-2 leading-tight focus:outline-none focus:text-white text-center border-b-4 transition ease-in-out duration-300 focus:border-purple-600 border-gray-800" type="text" placeholder="Looking for a message?">
                    <button hidden type="button">
                        Search
                    </button>
                </div>
            </form>
        </div>
        <div class="flex">
            <div class="w-full text-center">
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-3 mx-auto mt-24">
                    <div class="overflow-hidden">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dt class="text-sm leading-5 font-semibold text-gray-400 truncate">
                                    Messages
                                </dt>
                                <dd class="mt-1 text-5xl leading-9 font-bold text-purple-600">
                                    {{ number_format($totalMessages, 0, '', '.') }}
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
                                    {{ number_format($hearts, 0, '', '.') }}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="flex my-12">
                    <iframe class="w-1/2 mx-auto" width="560" height="315" src="https://www.youtube.com/embed/1BAEneVmajQ?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="flex">
            <div class="w-full">
                <div class="flex flex-wrap justify-center">
                    @include('components.pinned')
                </div>
                @foreach($messages->chunk(4) as $index => $chunk)
                    @if($index === 1)
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full m-2 font-bold text-center text-xs text-gray-600">
                                <a href="https://twitter.com/arcticn0b" class="font-bold text-gray-400 ">Contact</a> me if you've seen a negative message. Or have any suggestions for the page. <br> Memories such as fan art can be sent to <a href="mailto:memories@byronbernstein.com" class="text-gray-400">memories@byronbernstein.com</a>
                            </div>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                        @foreach($chunk as $message)
                            @include('components.message', ['message' => $message])
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

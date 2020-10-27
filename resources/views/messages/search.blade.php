@extends('layouts.master')

@section('content')
    <div class="container mx-auto my-12 text-white">
        <div class="flex">
            <div class="w-full text-center">
                <a href="{{ route('index') }}" class="hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Back home
                </a>
            </div>
        </div>

        <div class="flex">
            <div class="w-full text-center">
                <form action="{{ route('messages.search') }}" class="w-full mx-auto mt-12 max-w-sm">
                    <div class="flex items-center py-2">
                        <input name="q" class="appearance-none w-full bg-gray-900 text-gray-600 mr-3 rounded py-4 px-2 leading-tight focus:outline-none focus:text-white text-center border-b-4 transition ease-in-out duration-300 focus:border-purple-600 border-gray-800" type="text" placeholder="Looking for a message?">
                        <button hidden type="button">
                            Search
                        </button>
                    </div>
                </form>
            </div>
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

    <div class="container-fluid">
        <div class="flex">
            <div class="w-full mx-auto my-12">
                {{ $messages->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection

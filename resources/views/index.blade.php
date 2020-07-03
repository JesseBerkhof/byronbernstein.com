@extends('layouts.master')

@section('content')
	<div class="container mx-auto">
        @include('components.header')

        <div class="flex">
            <div class="w-full text-center">
                <p class="text-white font-semibold mt-24">
                    Leave a message or one last heart in the chat in memory of Byron.
                </p>
                <p class="text-white font-semibold mt-24">
                    {{ $messages->total() }} messages & {{ $hearts }} hearts
                </p>
                <message-form></message-form>
            </div>
        </div>
    </div>

    <div class="container-fluid lg:mx-24">
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
                <div class="w-full sm:w-full md:w-full lg:w-1/2 xl:w-1/2 m-2 font-bold text-white text-center">
                    @lang('texts.feed_cta')
                </div>
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                @foreach($chunk as $message)
                    @include('components.message', ['message' => $message])
                @endforeach
            </div>
        @endforeach

        <div class="flex flex-wrap justify-center my-8">
            <div class="w-full">
                {{ $messages->links() }}
            </div>
        </div>
    </div>
@endsection

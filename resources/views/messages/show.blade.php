@extends('layouts.master')

@section('content')
    <div class="container mx-auto mt-12 text-white">
        <div class="flex">
            <div class="w-full text-center">
                <a href="{{ route('index') }}" class="hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Back home
                </a>
            </div>
        </div>
        <div class="flex">
            <div class="w-full py-6">
                <h1 class="text-4xl font-bold">{{ $message->username }}</h1>
                <p class="text-xs">{{ $message->created_at->diffForHumans() }}</p>
                <p class="mt-6 leading-5 text-gray-400 group-hover:text-white">
                    {{ $message->body }}
                </p>
            </div>
        </div>
    </div>
@endsection

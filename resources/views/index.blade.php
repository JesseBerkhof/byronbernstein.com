@extends('layouts.master')

@section('content')
	<div class="container mx-auto mb-auto h-screen">
        @include('components.header')

        <div class="flex items-center justify-center mt-24">
            <button class="modal-button shadow-xl rounded-md bg-red-300 p-4 font-bold w-1/4 text-red-700 hover:bg-red-600 hover:text-white">
                Laat je waardering achter
            </button>
        </div>

        <div class="flex mt-24 mb-12">
            <div class="sm:w-full md:w-full lg:w-full xl:w-full text-center">
                <h1 class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-5xl text-blue-900">
                    {{ $appreciations->count() }} <br>Nederlanders <br>zijn blij met jullie.
                </h1>
            </div>
        </div>

        @foreach($appreciations->chunk(3) as $chunk)
            <div class="flex flex-wrap justify-center">
                @foreach($chunk as $appreciation)
                    <div class="w-full sm:w-full md:w-full lg:w-1/4 xl:w-1/4 m-2 bg-white p-4 shadow-md text-gray-900">
                        {!! $appreciation->message !!}
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection

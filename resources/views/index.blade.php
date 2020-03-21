@extends('layouts.master')

@section('content')
	<div class="container mx-auto mb-auto h-screen">
        @include('components.header')

        <div class="flex items-center justify-center mt-24">
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/3 bg-white shadow p-8">
                <form class="w-full mb-4" action="{{ route('thanks.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-wrap mb-6">
                        <div class="flex mb-8">
                            <h1>Laat een bedankje achter</h1>
                        </div>
                        <div class="w-full mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first_name">
                                @lang('fields.first_name')
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="first_name" placeholder="@lang('fields.placeholders.first_name')" type="text">
                        </div>
                        <div class="w-full mb-6 md:mb-4">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last_name">
                                @lang('fields.last_name') (@lang('fields.optional'))
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="last_name" placeholder="@lang('fields.placeholders.last_name')" type="text">
                        </div>
                        <div class="w-full mb-6 md:mb-4">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                                @lang('fields.city') (@lang('fields.optional'))
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="city" placeholder="@lang('fields.placeholders.city')" type="text">
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-2">
                        <button class="block w-full bg-gray-500 p-4 font-bold text-gray-900 hover:bg-red-600 hover:text-white" type="submit">
                            @lang('buttons.thanks.submit')
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="flex items-center justify-center mt-24">
            <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full text-center">
                <h1 class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-5xl text-blue-900">
                    {{ $appreciations->count() }} <br>Nederlanders <br>zijn blij met jullie.
                </h1>
            </div>
        </div>

        @include('components.share')

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

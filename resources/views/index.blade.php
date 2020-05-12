@extends('layouts.master')

@section('content')
	<div class="container mx-auto mb-12">
        @include('components.header')

        <div class="flex items-center justify-center mt-12">
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/3 text-center text-2xl text-blue-800">
                Er is al <b>{{ env('DONATIONS') }}</b> euro opgehaald voor het <br><span class="text-red-500 font-bold">Rode Kruis</span>
            </div>
        </div>

        <div class="flex items-center justify-center mt-12">
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/3 text-center text-blue-800">
                <li class="mx-2 sm:mx-4 md:mx-6 lg:mx-10 xl:mx-12 inline-block">
                    <a class="text-blue-900 bg-blue-200 hover:bg-red-400 hover:text-white font-bold p-4 px-8 rounded" href="https://www.geef.nl/nl/actie/covid-19/donateurs" target="_blank">Doneren</a>
                </li>
            </div>
        </div>

        <div class="flex items-center justify-center mt-12">
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/3 bg-white shadow p-8 rounded">
                <form class="w-full mb-4" action="{{ route('thanks.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-wrap mb-6">
                        <div class="flex mb-8">
                            <h1 class="text-blue-800 text-2xl">Laat een bedankje achter</h1>
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
                        <button class="block w-full bg-blue-200 p-4 font-bold rounded text-blue-800 hover:bg-red-600 hover:text-white" type="submit">
                            @lang('buttons.thanks.submit')
                        </button>
                    </div>
                </form>
                <div class="flex w-full sm:w-full md:w-full lg:w-full xl:w-full justify-center mt-8">
                    <h1 class="text-blue-800">Deel op social media</h1>
                </div>
                <div class="flex w-full sm:w-full md:w-full lg:w-full xl:w-full justify-center mt-2">
                    <div class="sharethis-inline-share-buttons"></div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mt-24">
            <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full text-center">
                <h1 class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-5xl text-blue-900">
                    {{ $appreciations->total() }} <br>Nederlanders <br>zijn blij met jullie.
                </h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        @if(in_array(\Illuminate\Support\Facades\Request::ip(), config('admins'), true))
        @foreach($unapproved->chunk(4) as $index => $chunk)
            <div class="flex flex-wrap justify-center">
                @foreach($chunk as $appreciation)
                    <div class="relative w-full sm:w-full md:w-full lg:w-1/6 xl:w-1/6 m-2 bg-gray-200 p-4 shadow-md text-gray-900">
                        {!! $appreciation->message !!}

                        <div class="flex">
                                <form action="{{ route('appreciation.approve', $appreciation) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="px-2 mt-2 p-4">Approve</button>
                                </form>
                                <form action="{{ route('appreciation.delete') }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input hidden name="appreciation_id" value="{{ $appreciation->id }}">
                                    <button class="px-2 mt-2 p-4"><i data-feather="trash" class="text-gray-700 inline-block"></i></button>
                                </form>
                                <form action="{{ route('ip.store') }}" method="POST">
                                    @csrf
                                    <input hidden name="ip" value="{{ $appreciation->ip }}">
                                    <button class="px-2 mt-2 p-4"><i data-feather="lock" class="text-gray-700 inline-block"></i></button>
                                </form>
                        </div>
                        <br>
                        <p class="absolute bottom-0 right-0 p-4 text-right text-xs text-gray-600">{{ $appreciation->created_at->diffForHumans() }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach
        @endif

        @foreach($appreciations->chunk(4) as $index => $chunk)
            @if($index === 1)
            <div class="flex flex-wrap justify-center">
                <div class="w-full sm:w-full md:w-full lg:w-1/2 xl:w-1/2 m-2 font-bold text-blue-900 text-center">
                    Help mee! Doneer je mondkapjes aan een ziekenhuis bij jou in de buurt.
                </div>
            </div>
            @endif

            <div class="flex flex-wrap justify-center">
                @foreach($chunk as $appreciation)
                    <div class="relative w-full sm:w-full md:w-full lg:w-1/6 xl:w-1/6 m-2 bg-white p-4 shadow-md text-gray-900">
                        {!! $appreciation->message !!}

                        <div class="flex">
                        @if(in_array(\Illuminate\Support\Facades\Request::ip(), config('admins'), true))
                        <form action="{{ route('appreciation.delete') }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input hidden name="appreciation_id" value="{{ $appreciation->id }}">
                            <button class="px-2 mt-2 p-4"><i data-feather="trash" class="text-gray-700 inline-block"></i></button>
                        </form>
                        <form action="{{ route('ip.store') }}" method="POST">
                            @csrf
                            <input hidden name="ip" value="{{ $appreciation->ip }}">
                            <button class="px-2 mt-2 p-4"><i data-feather="lock" class="text-gray-700 inline-block"></i></button>
                        </form>
                        @endif
                        </div>
                        <br>
                        <p class="absolute bottom-0 right-0 p-4 text-right text-xs text-gray-600">{{ $appreciation->created_at->diffForHumans() }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach

        <div class="flex flex-wrap justify-center my-8">
            <div class="w-full">
                {{ $appreciations->links() }}
            </div>
        </div>
    </div>
@endsection

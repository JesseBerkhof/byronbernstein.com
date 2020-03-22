@extends('layouts.master')

@section('content')
	<div class="container mx-auto mb-12">
        @include('components.header')

        <div class="flex items-center justify-center mt-24">
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
        @foreach($appreciations->chunk(4) as $index => $chunk)
            @if($index === 4)
                <div class="flex flex-wrap justify-center">
                    <div class="w-full sm:w-full md:w-full lg:w-1/2 xl:w-1/2 m-2 bg-white p-4 shadow-md text-gray-900 text-center">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-format="fluid"
                             data-ad-layout-key="-ef+6k-30-ac+ty"
                             data-ad-client="ca-pub-6313840088307831"
                             data-ad-slot="3491175108"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
                @endif

            <div class="flex flex-wrap justify-center">
                @foreach($chunk as $appreciation)
                    <div class="w-full sm:w-full md:w-full lg:w-1/6 xl:w-1/6 m-2 p-4 text-gray-900">
                        {!! $appreciation->message !!}

                        @if(in_array(\Illuminate\Support\Facades\Request::ip(), config('admins'), true))
                        <form action="{{ route('appreciation.delete') }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input hidden name="appreciation_id" value="{{ $appreciation->id }}">
                            <button class="w-full bg-red-300 px-2 py-1 mt-2 text-red-800 hover:bg-red-400 hover:text-red-900">Verwijderen</button>
                        </form>
                        <form action="{{ route('ip.store') }}" method="POST">
                            @csrf
                            <input hidden name="ip" value="{{ $appreciation->ip }}">
                            <button class="w-full bg-purple-300 px-2 py-1 mt-2 text-purple-800 hover:bg-purple-400 hover:text-red-900">Blokkeren</button>
                        </form>
                        @endif
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

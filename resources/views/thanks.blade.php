@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        @include('components.header')
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-orange-900 text-center">
                    Thanks to..
                </h1>
                <h2 class="text-2xl text-orange-900 text-center mb-8">
                    All the hard working people keeping us safe and fighting this new corona virus.
                </h2>
                <div class="w-2/3 mx-auto">
                    <div class="flex mt-6">
                        <div class="w-2/3 mx-auto bg-red-100 p-8 shadow-md">
                            @if($errors->isNotEmpty())
                            <div class="flex mb-8">
                                <div class="w-full bg-red-400 text-red-900 p-4">
                                    <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                            <form class="w-full" action="{{ route('thanks.store') }}" method="POST">
                                @csrf
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/2 px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                            Firstname
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="first_name" placeholder="Jane" type="text">
                                    </div>
                                    <div class="w-full md:w-1/2 px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                            Lastname (optional)
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="last_name" placeholder="Doe" type="text">
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                            City
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="city" placeholder="Schiedam" type="text">
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                            Country
                                        </label>
                                        <div class="relative">
                                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="country">
                                                @foreach($countries as $country)
                                                    <option value="{{ $country }}">
                                                        {{ $country }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap mt-12 mb-2">
                                    <button class="block w-full bg-gray-500 p-4 font-bold text-gray-900 hover:bg-red-600 hover:text-white" type="submit">
                                        Send them your love & support
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($appreciations->chunk(3) as $chunk)
        <div class="flex mt-6">
            @foreach($chunk as $appreciation)
                <div class="w-1/3 mx-2 bg-red-100 p-4 shadow-md text-gray-900">
                    {{ $appreciation->name }} says <span class="font-bold text-red-700">thank you</span> from <span class="font-bold">{{ $appreciation->location }}</span>
                </div>
            @endforeach
        </div>
        @endforeach
    </div>
@endsection

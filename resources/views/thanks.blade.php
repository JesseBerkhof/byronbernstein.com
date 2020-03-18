@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        @include('components.header')
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-orange-900 text-center">
                    @lang('texts.thanks.title')
                </h1>
                <h2 class="text-2xl text-orange-900 text-center mb-8">
                    @lang('texts.thanks.subtitle')
                </h2>
                <div class="w-full sm:w-full md:w-full lg:w-full xl:w-2/3 mx-auto">
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
                                <div class="flex flex-wrap mb-6">
                                    <div class="w-full sm::w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 px-3 mb-6">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first_name">
                                            @lang('fields.first_name')
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="first_name" placeholder="@lang('fields.placeholders.first_name')" type="text">
                                    </div>
                                    <div class="w-full sm::w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 px-3 mb-6">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last_name">
                                            @lang('fields.last_name') (@lang('fields.optional'))
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="last_name" placeholder="@lang('fields.placeholders.last_name')" type="text">
                                    </div>
                                </div>
                                <div class="flex flex-wrap mb-4">
                                    <div class="w-full sm::w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                                            @lang('fields.city') (@lang('fields.optional'))
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="city" placeholder="@lang('fields.placeholders.city')" type="text">
                                    </div>
                                    <div class="w-full sm::w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="country">
                                            @lang('fields.country')
                                        </label>
                                        <div class="relative">
                                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="country">
                                                @foreach($countries as $country)
                                                    <option value="{{ $country }}" @if($country === config('app.country')) selected @endif>
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
                                        @lang('buttons.thanks.submit')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($appreciations->chunk(3) as $chunk)
        <div class="flex flex-wrap mt-6 mb-8 justify-center">
            @foreach($chunk as $appreciation)
                <div class="w-full sm:w-full md:w-full lg:w-1/4 xl:w-1/4 m-2 bg-red-100 p-4 shadow-md text-gray-900">
                    {{ $appreciation->name }} <span class="font-bold text-red-700">{{ \Illuminate\Support\Arr::random([
                        trans('texts.thanks.thank_you'),
                        trans('texts.thanks.thank_you_2'),
                        trans('texts.thanks.thank_you_3')
                    ]) }}</span>  @lang('texts.thanks.from')  <span class="font-bold">{{ $appreciation->location }}</span>
                </div>
            @endforeach
        </div>
        @endforeach
    </div>
@endsection

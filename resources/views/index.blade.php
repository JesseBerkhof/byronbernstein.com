@extends('layouts.master')

@section('content')
	<div class="container mx-auto">
            @include('components.header')
            <div class="flex mt-24">
                <div class="w-1/2 sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/6 text-center mx-auto">
                    <h2 class="text-1xl sm:text-2xl md:text-2xl lg:text-2xl xl:text-2xl text-orange-900">
                        <i data-feather="check" class="text-green-700 inline-block"></i> @lang('texts.home.cough')
                    </h2>
                </div>
                <div class="w-1/2 sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/6 text-center mx-auto">
                    <h2 class="text-1xl sm:text-2xl md::text-2xl lg:text-2xl xl:text-2xl text-orange-900">
                        <i data-feather="check" class="text-green-700 inline-block"></i> @lang('texts.home.sneeze')
                    </h2>
                </div>
            </div>
            @include('components.share')
            <div class="flex mt-24">
                <div class="sm:w-full md:w-full lg:w-full xl:w-full text-center">
                    <h1 class="text-5xl sm:text-6xl md:text-6xl lg:text-6xl xl:text-6xl text-orange-900">
                        @lang('texts.home.cta_title')
                    </h1>
                    <h2 class="text-2xl sm:text-4xl md:text-4xl lg:text-4xl xl:text-4xl text-orange-900 mb-4">@lang('texts.home.cta_description')</h2>
                    <h2 class="text-1xl sm:text-2xl md:text-2xl lg:text-2xl xl:text-2xl text-orange-900">@lang('texts.home.cta_ending')</h2>
                </div>
            </div>
        </div>
@endsection

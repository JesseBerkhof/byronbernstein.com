@extends('layouts.master')

@section('content')
	<div class="container mx-auto">
            @include('components.header')
            <div class="flex mt-24">
                <div class="w-1/3 text-right mx-auto">
                    <h2 class="text-2xl text-orange-900">
                        <i data-feather="check" class="text-green-700 inline-block"></i> @lang('texts.home.cough')
                    </h2>
                </div>
                <div class="w-1/3 text-left mx-auto">
                    <h2 class="text-2xl text-orange-900">
                        <i data-feather="check" class="text-green-700 inline-block"></i> @lang('texts.home.sneeze')
                    </h2>
                </div>
            </div>
            @include('components.share')
            <div class="flex mt-24">
                <div class="w-full text-center">
                    <h1 class="text-6xl text-orange-900">
                        @lang('texts.home.cta_title')
                    </h1>
                    <h2 class="text-4xl text-orange-900 mb-4">@lang('texts.home.cta_description')</h2>
                    <h2 class="text-2xl text-orange-900">@lang('texts.home.cta_ending')</h2>
                </div>
            </div>
        </div>
@endsection

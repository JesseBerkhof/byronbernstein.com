@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        @include('components.header')
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-orange-900 text-center mb-8">
                    @lang('texts.hygiene.title')
                </h1>
                <div class="w-full mx-auto">
                    <div class="flex mt-6 mb-8">
                        <div class="w-full sm:w-1/5 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-2 bg-red-100 p-4 shadow-md text-gray-900">
                            <span class="font-bold">
                                <i data-feather="check" class="text-green-700 inline-block"></i>
                                @lang('texts.hygiene.1')
                            </span>
                        </div>
                        <div class="w-full sm:w-1/5 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-2 bg-red-100 p-4 shadow-md text-gray-900">
                            <span class="font-bold">
                                <i data-feather="check" class="text-green-700 inline-block"></i>
                                @lang('texts.hygiene.2')
                            </span>
                        </div>
                        <div class="w-full sm:w-1/5 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-2 bg-red-100 p-4 shadow-md text-gray-900">
                            <span class="font-bold">
                                <i data-feather="check" class="text-green-700 inline-block"></i>
                                @lang('texts.hygiene.3')
                            </span>
                        </div>
                        <div class="w-full sm:w-1/5 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-2 bg-red-100 p-4 shadow-md text-gray-900">
                            <span class="font-bold">
                                <i data-feather="check" class="text-green-700 inline-block"></i>
                                @lang('texts.hygiene.4')
                            </span>
                        </div>
                        <div class="w-full sm:w-1/5 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-2 bg-red-100 p-4 shadow-md text-gray-900">
                            <span class="font-bold">
                                <i data-feather="check" class="text-green-700 inline-block"></i>
                                @lang('texts.hygiene.5')
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

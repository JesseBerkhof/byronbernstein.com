@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        @include('components.header')
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-blue-900 text-center">
                    Maatregelen
                </h1>
                <div class="w-full mx-auto">
                    <div class="flex flex-wrap my-16 justify-center">
                        <div class="w-full sm:w-full md:w-1/4 lg:w-1/6 xl:w-1/8 m-4 sm:m-4 md:m-1 bg-white py-4 sm:py-10 md:py-4 shadow-md text-gray-900 h-40 text-center">
                            <div class="flex">
                                <div class="w-full">
                                    <i data-feather="droplet" class="my-8 sm:my-1 md:my-6 lg:my-6 xl:my-6 text-blue-700 inline-block"></i>
                                </div>
                            </div>
                            <span class="font-bold">Was je handen regelmatig.</span>
                        </div>
                        <div class="w-full sm:w-full md:w-1/3 lg:w-1/6 xl:w-1/8 m-4 sm:m-4 md:m-1 bg-white py-4 sm:py-10 md:py-4 shadow-md text-gray-900 h-40 text-center">
                            <div class="flex">
                                <div class="w-full">
                                    <i data-feather="map" class="my-8 sm:my-1 md:my-6 lg:my-6 xl:my-6 text-gray-700 inline-block"></i>
                                </div>
                            </div>
                            <span class="font-bold">Gebruik papieren zakdoekjes.</span>
                        </div>
                        <div class="w-full sm:w-full md:w-1/3 lg:w-1/6 xl:w-1/8 m-4 sm:m-4 md:m-1 bg-white py-4 sm:py-10 md:py-4 shadow-md text-gray-900 h-40 text-center">
                            <div class="flex">
                                <div class="w-full">
                                    <i data-feather="x-octagon" class="my-8 sm:my-1 md:my-6 lg:my-6 xl:my-6 text-red-700 inline-block"></i>
                                </div>
                            </div>
                            <span class="font-bold">Schud geen handen.</span>
                        </div>
                        <div class="w-full sm:w-full md:w-1/3 lg:w-1/6 xl:w-1/8 m-4 sm:m-4 md:m-1 bg-white py-4 sm:py-10 md:py-4 shadow-md text-gray-900 h-40 text-center">
                            <div class="flex">
                                <div class="w-full">
                                    <i data-feather="home" class="my-8 sm:my-1 md:my-6 lg:my-6 xl:my-6 text-purple-700 inline-block"></i>
                                </div>
                            </div>
                            <span class="font-bold">#BlijfThuis</span>
                        </div>
                        <div class="w-full sm:w-full md:w-1/3 lg:w-1/6 xl:w-1/8 m-4 sm:m-4 md:m-1 bg-white py-4 sm:py-10 md:py-4 shadow-md text-gray-900 h-40 text-center">
                            <div class="flex">
                                <div class="w-full">
                                    <i data-feather="thumbs-up" class="my-8 sm:my-1 md:my-6 lg:my-6 xl:my-6 text-blue-700 inline-block"></i>
                                </div>
                            </div>
                            <span class="font-bold">1,5 meter afstand houden.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

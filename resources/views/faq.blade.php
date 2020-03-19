@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        @include('components.header')
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-orange-900 text-center mb-8">
                    @lang('texts.faq.title')
                </h1>
                <div class="w-2/3 mx-auto">
                    <ul class="list-inside sm:list-outside md:list-inside lg:list-outside xl:list-inside text-yellow-900 text-lg">
                        <li class="font-bold">@lang('texts.faq.questionOne')</li>
                        <li class="mb-4">
                            @lang('texts.faq.answerOne')
                        </li>
                        <li class="font-bold">@lang('texts.faq.questionTwo')</li>
                        <li class="mb-4">
                            @lang('texts.faq.answerTwo')
                        </li>
                    </ul>
                </div>
                <div class="flex">
                    <div class="w-2/2 mx-auto">
                        <div class="justify-center mt-4 text-center">
{{--                            <iframe src="https://giphy.com/embed/xUOwGmG2pRfFZUmdVe" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>--}}
                            <video width="320" height="240" controls autoplay>
                                <source src="{{ asset('videos/coronadab.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

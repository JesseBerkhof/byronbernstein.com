@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        @include('components.header')
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-orange-900 text-center mb-8">
                    @lang('texts.hygiene.title')
                </h1>
                <div class="w-2/3 mx-auto">
                    <ul class="list-inside sm:list-outside md:list-inside lg:list-outside xl:list-inside text-yellow-900 text-lg">
                        <li class="font-bold">@lang('texts.hygiene.most_important_measures')</li>
                        <li>- @lang('texts.hygiene.1')</li>
                        <li>- @lang('texts.hygiene.2')</li>
                        <li>- @lang('texts.hygiene.3')</li>
                        <li>- @lang('texts.hygiene.4')</li>
                        <li>- @lang('texts.hygiene.5')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

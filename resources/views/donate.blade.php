@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        @include('components.header')
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-orange-900 text-center mb-8">
                    Donate
                </h1>
                <div class="w-2/3 mx-auto">
                    <ul class="list-inside sm:list-outside md:list-inside lg:list-outside xl:list-inside text-yellow-900 text-lg">
                        <li class="font-bold">Why is it so important?</li>
                        <li class="mb-4">
                            Human-to-human transmission is easily spread when not covering your sneeze or cough but also even when not covering it up properly.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

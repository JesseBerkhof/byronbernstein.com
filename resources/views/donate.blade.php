@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        @include('components.header')
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-blue-900 text-center mb-8">
                    Coronavirus
                </h1>
                <h1 class="text-3xl text-blue-900 text-center">
                    Meer relevante info is te vinden op de website van het RIVM
                </h1>
            </div>
        </div>
    </div>
@endsection

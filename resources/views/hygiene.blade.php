@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        @include('components.header')
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-orange-900 text-center mb-8">
                    Hygiene
                </h1>
                <div class="w-2/3 mx-auto">
                    <ul class="list-inside sm:list-outside md:list-inside lg:list-outside xl:list-inside text-yellow-900 text-lg">
                        <li class="font-bold">The most important measures you can take to prevent spread of the virus</li>
                        <li>- Wash your hands regularly.</li>
                        <li>- Use paper towels when coughing or sneezing.</li>
                        <li>- Do not shake hands.</li>
                        <li>- Stay at home when you're feeling sick.</li>
                        <li>- Catch that sneeze or cough in a <span class="font-bold">DAB</span>.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

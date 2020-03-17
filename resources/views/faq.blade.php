@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        @include('components.header')
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-orange-900 text-center mb-8">
                    FAQ
                </h1>
                <div class="w-2/3 mx-auto">
                    <ul class="list-inside sm:list-outside md:list-inside lg:list-outside xl:list-inside text-yellow-900 text-lg">
                        <li class="font-bold">Why is it so important?</li>
                        <li class="mb-4">
                            The new corona virus is easily spread through human-to-human transmission. Mostly by not covering you cough or sneeze. But also when not covering it properly.
                            That's why you should always cough or sneeze in your arm, to reduce spread of any virus. That's why we launched this website. To spread awareness on how to cover your cough or sneeze. Just <span class="font-bold">dab</span> on that corona virus.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

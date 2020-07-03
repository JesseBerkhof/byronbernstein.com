<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta property="og:title" content="{{ config('app.name') }}"/>
        <meta property="og:type" content="charity"/>
        <meta property="og:url" content="{{ config('app.url') }}"/>
        <meta property="og:site_name" content="{{ config('app.name') }}"/>
        <meta property="og:description" content="{{ trans('socials.description') }}"/>

        <title>{{ config('app.name') }}</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="https://unpkg.com/feather-icons"></script>

        <script defer="" src="{{ mix('js/app.js') }}"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145004761-11"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-145004761-11');
        </script>
        <style>
            @font-face {
                font-family: "Montserrat";
                url("public/fonts/Montserrat-Black.ttf") format('truetype');
                font-style: normal;
            }

            @font-face {
                font-family: "MontserratRegular";
            url("public/fonts/Montserrat-Regular.ttf") format('truetype');
                font-weight: 400;
                font-style: normal;
            }

            h1, h2, h3, h4, h4, h6 {
                font-family: "Montserrat", sans-serif;
                font-weight: 900
            }

            body {
                font-family: "MontserratRegular", sans-serif;
                font-style: normal;
            }

        </style>
    </head>
    <body class="bg-black @if(config('app.env') === 'local' && env('RESPONSIVE_DEBUG'))sm:bg-red-500 md:bg-blue-500 lg:bg-pink-500 xl:bg-green-500 @endif">
        <div id="app">
            @if($errors->isNotEmpty())
                <div class="flex mb-8">
                    <div class="w-full bg-red-400 text-red-900 p-4 text-center">
                        <ul class="font-bold">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @if(session()->has('success'))
                <div class="flex mb-8">
                    <div class="w-full bg-green-400 text-green-900 p-4 text-center">
                        <ul class="font-bold">
                            You're message will be approved soon.
                        </ul>
                    </div>
                </div>
            @elseif(session()->has('error'))
                <div class="flex mb-8">
                    <div class="w-full bg-red-400 text-red-900 p-4 text-center">
                        <ul class="font-bold">
                            {{ session()->get('error') }}
                        </ul>
                    </div>
                </div>
            @endif

            <div class="container mx-auto">
                <div class="flex mt-4 sm:mt-8 md:mt-8 lg:mt-8 xl:mt-8 mb-24">
                    <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full text-center">
                        @include('components.navigation')
                    </div>
                </div>
            </div>

            @yield('content')
        </div>
    </body>

    <script>
        feather.replace()
    </script>
</html>

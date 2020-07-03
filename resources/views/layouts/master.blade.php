<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta property="og:title" content="{{ config('app.name') }}"/>
        <meta property="og:type" content="charity"/>
        <meta property="og:url" content="{{ config('app.url') }}"/>
        <meta property="og:image" content="{{ asset('images/og_image.png') }}"/>
        <meta property="og:site_name" content="{{ config('app.name') }}"/>
        <meta property="og:description" content="{{ trans('socials.description') }}"/>
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icons/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icons/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icons/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icons/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icons/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icons/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icons/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icons/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('icons/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icons/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('icons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('icons/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <title>{{ config('app.name') }}</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="https://unpkg.com/feather-icons"></script>

        <script src="{{ asset('js/share.js') }}"></script>
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
                            Het is gelukt! Uw bedankje wordt zo snel mogelijk toegevoegd aan de lijst.
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

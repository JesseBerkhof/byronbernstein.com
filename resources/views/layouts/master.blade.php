<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <title>
            {{ config('app.name') }}
        </title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="https://unpkg.com/feather-icons"></script>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="{{ asset('js/share.js') }}"></script>
        <script defer="" src="{{ mix('js/app.js') }}"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('app.analytics') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ config('app.analytics') }}');
        </script>
    </head>
    <body class="bg-yellow-500">

    <div class="container mx-auto">
        <div class="flex mt-8">
            <div class="w-full text-center">
                @include('components.navigation')
            </div>
        </div>
    </div>

        <div class="flex mt-24">
            <div class="w-full text-center">
                <img src="{{ asset('images/dab.png') }}" class="w-48 mx-auto">
            </div>
        </div>
        @yield('content')
    </body>

    <script>
        feather.replace()
    </script>
</html>
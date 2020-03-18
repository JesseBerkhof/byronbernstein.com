<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta property="og:title" content="{{ config('app.name') }}"/>
        <meta property="og:type" content="charity"/>
        <meta property="og:url" content="{{ config('app.url') }}"/>
{{--        <meta property="og:image" content="http://ia.media-imdb.com/rock.jpg"/>--}}
        <meta property="og:site_name" content="{{ config('app.name') }}"/>
        <meta property="og:description"
              content="{{ trans('socials.facebook.message') }}"/>

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
    <body class="bg-yellow-500 @if(config('app.env') === 'local' && env('RESPONSIVE_DEBUG'))sm:bg-red-500 md:bg-blue-500 lg:bg-pink-500 xl:bg-green-500 @endif">

        <div class="container mx-auto">
            <div class="flex mt-4 sm:mt-8 md:mt-8 lg:mt-8 xl:mt-8">
                <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full text-center">
                    @include('components.navigation')
                </div>
            </div>
        </div>

        <div class="flex mt-24">
            <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full text-center">
                <img src="{{ asset('images/dab.png') }}" class="w-32 sm:w-48 md:w-48 lg:w-48 xl:w-48 mx-auto">
            </div>
        </div>
        @yield('content')
    </body>

    <script>
        feather.replace()
    </script>
</html>

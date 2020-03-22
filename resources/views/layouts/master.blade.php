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
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="https://unpkg.com/feather-icons"></script>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="{{ asset('js/share.js') }}"></script>
        <script defer="" src="{{ mix('js/app.js') }}"></script>

        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e7294f8d9f9b800124a2d35&product=inline-share-buttons" async="async"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('app.analytics') }}"></script>
        <script data-ad-client="ca-pub-6313840088307831" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ config('app.analytics') }}');
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
    <body class="bg-blue-100 @if(config('app.env') === 'local' && env('RESPONSIVE_DEBUG'))sm:bg-red-500 md:bg-blue-500 lg:bg-pink-500 xl:bg-green-500 @endif">

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

        @if(Session::has('success'))
            <div class="flex mb-8">
                <div class="w-full bg-green-400 text-green-900 p-4 text-center">
                    <ul class="font-bold">
                        Het is gelukt! Uw bedankje wordt zo snel mogelijk toegevoegd aan de lijst.
                    </ul>
                </div>
            </div>
        @endif


        @if(Session::has('error'))
            <div class="flex mb-8">
                <div class="w-full bg-red-400 text-red-900 p-4 text-center">
                    <ul class="font-bold">
                        {{ Session::get('error') }}
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

        @include('modals.thanks')
        @yield('content')

{{--        <div class="flex text-center">--}}
{{--            <div class="w-full my-8 text-orange-900 text-xs">--}}
{{--                @lang('texts.footer.reach_me') <a href="mailto:{{ config('app.email') }}m" class="font-bold">{{ config('app.email') }}</a><br>--}}
{{--                @if(config('app.government'))--}}
{{--                    Meer actuele informatie over het coronavirus is te vinden op de website van het <a href="{{ config('app.government') }}" class="font-bold">RIVM.</a><br>--}}
{{--                @endif--}}
{{--                <a href="https://instagram.com/coronadabnl" class="font-bold">@CoronaDabNL</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </body>

    <script>
        feather.replace()
    </script>
    <script>
        $('body').removeClass('stop-scrolling')
        const button = document.querySelector('.modal-button')
        button.addEventListener('click', toggleModal)

        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)

        let open = 0;

        function toggleModal () {
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            $('body').toggleClass('stop-scrolling');
        }

    </script>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta property="og:title" content="Petition for Reckful's reckH to be a global Twitch emote"/>
        <meta property="og:type" content="petition"/>
        <meta property="og:url" content="{{ config('app.url') }}"/>
        <meta property="og:site_name" content="Petition for Reckful's reckH to be a global Twitch emote"/>
        <meta property="og:image" content="{{ asset('images/social.jpg') }}"/>
        <meta property="og:description" content="Petition for Reckful's reckH to be a global Twitch emote"/>
        <meta property="twitter:title" content="Petition for Reckful's reckH to be a global Twitch emote "/>
        <meta property="twitter:type" content="charity"/>
        <meta property="twitter:url" content="{{ config('app.url') }}"/>
        <meta property="twitter:site_name" content="Petition for Reckful's reckH to be a global Twitch emote"/>
        <meta property="twitter:card" content="{{ asset('images/social.jpg') }}"/>
        <meta property="twitter:description" content="Petition for Reckful's reckH to be a global Twitch emote"/>
        <meta property="twitter:image" content="{{ asset('images/social.jpg') }}"/>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('/favicon/site.webmanifest') }}">
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

            @yield('content')
        </div>
    </body>

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f40425ac8e5ad00121d28e9&product=sop' async='async'></script>
    <script>
        feather.replace()
    </script>
</html>

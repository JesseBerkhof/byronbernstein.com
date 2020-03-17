<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <title>
            {{ config('app.name') }}
        </title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"></link>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet"></link>
        <script src="https://unpkg.com/feather-icons"></script>
        <script defer="" src="{{ mix('js/app.js') }}"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145004761-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-145004761-4');
        </script>
    </head>
    <body class="bg-yellow-500">
        @yield('content')
    </body>

    <script>
        feather.replace()
    </script>
</html>

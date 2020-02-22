<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <title>
                    Weg met DHL
                </title>
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"></link>
                <link href="{{ mix('css/app.css') }}" rel="stylesheet"></link>
                <script defer="" src="{{ mix('js/app.js') }}"></script>
            </meta>
        </meta>
    </head>
    <body class="bg-yellow-500">
        @yield('content')
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }} - Admin Panel</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script defer="" src="{{ mix('js/app.js') }}"></script>
</head>
<body class="bg-gray-800">
    @yield('content')
</body>

<script>
    feather.replace()
</script>
</html>

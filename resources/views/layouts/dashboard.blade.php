<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }} - Admin Panel</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script defer="" src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-800">
    <nav class="bg-gray-700 border-b border-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <h1 class="text-3xl font-bold leading-tight">
                            🕯
                        </h1>
                    </div>
                </div>
                <div>
                <span class="inline-flex rounded-md shadow mt-2">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-gray-200 bg-gray-500 hover:text-white focus:outline-none focus:border-gray-300 focus:shadow-outline-gray active:bg-gray-50 active:text-gray-700 transition duration-150 ease-in-out">
                          Logout
                        </button>
                    </form>
                </span>
                </div>
            </div>
        </div>
    </nav>

    <div class="py-10">
        <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight text-gray-400">
                    Unapproved messages
                </h1>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
                @yield('content')
            </div>
        </main>
    </div>
</div>
</body>

<script>
    feather.replace()
</script>
</html>

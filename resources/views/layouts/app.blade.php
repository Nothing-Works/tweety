<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto">
                <h1><img src="/images/logo.svg" alt="tweety"></h1>
            </header>
        </section>
        <section class="px-8">
            <main class="container mx-auto">
                <div class="items-start lg:flex">
                    <div class="lg:w-1/6">
                        @include('_sidebar-links')
                    </div>
                    <div class="lg:flex-1 lg:mx-10">
                        @yield('content')
                    </div>
                    <div class="flex flex-col p-4 bg-blue-100 rounded-lg lg:w-1/6">
                        @include('_follows-list')
                    </div>
                </div>
            </main>
        </section>
    </div>
</body>

</html>

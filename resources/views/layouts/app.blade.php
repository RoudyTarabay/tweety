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
        <section class="p-2 pt-5">
            <header class="container mx-auto mb-5">
                <h1><img src="/images/logo.svg" alt="logo" /></h1>
            </header>
        </section>
        @auth
        <section class="p-2">
            <main class="container mx-auto ">
                <div class="row">
                    <div class="col-1">
                        @include('_sidebar-links')
                    </div>
                    <div class="col-8 mx-auto">
                        @yield('content')
                    </div>
                    <div class="col-2 bg-info rounded">
                        @include('_friends-list')
                    </div>
                </div>
            </main>
        </section>
        @endauth
        @guest
        @yield('content')
        @endguest
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('images/favicon.png') }}" />
    <meta name="theme-color" content="#1EA24D">
    @yield('head')
    @vite('resources/css/app.css')
    @vite('resources/sass/main.scss')
    @yield('meta')
</head>

<body>

    @yield('popups')

    @if ($errors->any())
        <script>
            alert("{{ $errors->first() }}");
        </script>
    @endif

    @if (\Session::has('message'))
        <script>
            alert("{!! \Session::get('message') !!}");
        </script>
    @endif


    <main class="main @yield('back')">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
    </main>

    @yield('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navToggle = document.querySelector('.nav-toggle');
            const navList = document.querySelector('.nav-list');
            if (navToggle) {
                navToggle.addEventListener('click', function() {
                    navToggle.classList.toggle('active');
                    navList.classList.toggle('active');
                });
            }
        });
    </script>
</body>

</html>

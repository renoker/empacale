<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('web.png') }}" />
    <meta name="theme-color" content="#1EA24D">
    @yield('head')
    @vite('resources/css/app.css')
    @vite('resources/sass/main.scss')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QX4ZY8V2DS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-QX4ZY8V2DS');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '783826973679476');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=783826973679476&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
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
        document.getElementById('topCero').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        const menu_hamburguesa = document.getElementById('menu_hamburguesa')
        const box_menu = document.getElementById('menu_list')
        menu_hamburguesa.addEventListener('click', function() {
            console.log('Entro');
            box_menu.classList.add('active')
        })

        box_menu.addEventListener('click', function() {
            box_menu.classList.remove('active')
        })
    </script>
</body>

</html>

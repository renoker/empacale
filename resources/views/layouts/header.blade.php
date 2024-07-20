<header class="desk">
    <header class="header">
        <nav class="nav">
            <div class="spacio"></div>
            <ul class="nav-list">
                <li class="nav-item"><a href="{{ route('user.home') }}"
                        class="nav-link @if (Route::currentRouteName() == 'user.home') active @endif">HOME</a></li>
                @if (!Auth::guard('user')->check())
                    <li class="nav-item"><a href="{{ route('user.registro') }}"
                            class="nav-link @if (Route::currentRouteName() == 'user.registro') active @endif">REGISTRO</a></li>
                @endif
                <li class="nav-item"><a href="{{ route('user.faqs') }}"
                        class="nav-link @if (Route::currentRouteName() == 'user.faqs') active @endif">FAQ</a></li>
                <li class="nav-item"><a href="{{ route('user.ganadores') }}"
                        class="nav-link @if (Route::currentRouteName() == 'user.ganadores') active @endif">GANADORES</a></li>
            </ul>
            @if (!Auth::guard('user')->check())
                <a href="{{ route('login') }}" class="login">
                    <img src="{{ url('assets/images/home/login.png') }}" class="login-icon" alt="">
                </a>
            @else
                <a href="{{ route('user.profile') }}" class="login">
                    <img src="{{ url('assets/images/home/login.png') }}" class="login-icon" alt="">
                </a>
            @endif
        </nav>
    </header>
</header>


<header class="mobile">
    <div class="header">
        <img src="{{ url('assets/images/hamburguesa_blanco.png') }}" id="menu_hamburguesa" alt="">
    </div>
</header>
<div class="box_menu_mobile mobile" id="menu_list">
    <div class="menu">
        <div class="item_mobile">
            <a href="{{ url('/') }}">
                <img src="{{ url('images/faqs/LOGO.png') }}" alt="">
            </a>
            @if (Auth::guard('user')->check())
                <a href="{{ route('user.profile') }}">
                    <div class="flex_mobile">
                        <h1 class="h1">MI PERFIL</h1>
                        <img src="{{ url('assets/images/perfil.png') }}" alt="" class="avatar_header">
                    </div>
                </a>
            @else
                <a href="{{ route('login') }}">
                    <div class="flex_mobile">
                        <h1 class="h1">INICIAR SESIÓN</h1>
                        <img src="{{ url('assets/images/perfil.png') }}" alt="" class="avatar_header">
                    </div>
                </a>
            @endif
            <ul>
                <li>
                    <a href="{{ route('user.home') }}">
                        <span class="font-cubano span_menu_list text-xl">home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.registro') }}">
                        <span class="font-cubano span_menu_list text-xl">registro</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.faqs') }}">
                        <span class="font-cubano span_menu_list text-xl">faqs</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.ganadores') }}">
                        <span class="font-cubano span_menu_list text-xl">ganadores</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

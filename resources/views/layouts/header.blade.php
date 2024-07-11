<header>
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
